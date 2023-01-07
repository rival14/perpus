<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\HistoriExport;
use Barryvdh\DomPDF\Facade\Pdf;

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

        $items = $items = Order::with(['user', 'buku'])->get();

        return view('pages.admin.report.index', compact('total_buku', 'judul_buku', 'order', 'items'));
    }

    public function excel()
    {
        $nama_file = 'laporan_history_'.date('Y-m-d_H-i-s').'.xlsx';
        return \Maatwebsite\Excel\Facades\Excel::download(new HistoriExport, $nama_file);
    }

    public function pdf()
    {
        $items = Order::with(['user', 'buku'])->get();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pages.admin.report.pdf.index', compact('items'));
        return $pdf->download('laporan_history_'.date('Y-m-d_H-i-s').'.pdf');
    }
}
