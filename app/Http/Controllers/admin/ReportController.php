<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Exports\HistoriExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {

        $buku = Order::select('*', DB::raw('COUNT(buku_id) as total_buku'))->with('buku')->groupBy('buku_id')->get();

        $total_buku = $buku->pluck('total_buku');
        $judul_buku = $buku->pluck('buku.judul');

        for ($i=0; $i < 12; $i++) {
            $order[$i] = Order::whereMonth("created_at", $i + 1)->count();
        }

        $categories = Kategori::withCount('buku')->get();

        $kategori = [];
        foreach ($categories as $key => $value) {
            $kategori[] = [
                "x" => $value->name,
                "y" => $value->buku_count,
            ];
        }
        return view('pages.admin.report.index', compact('total_buku', 'judul_buku', 'order', 'kategori'));
    }

    public function excel()
    {
        $nama_file = 'laporan_history_'.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new HistoriExport, $nama_file, \Maatwebsite\Excel\Excel::XLSX);
    }

    public function pdf()
    {
        $items = Order::with(['user', 'buku'])->get();
        $pdf = Pdf::loadView('pages.admin.report.pdf.index', compact('items'))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_history_'.date('Y-m-d_H-i-s').'.pdf');
    }
}
