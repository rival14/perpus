<?php

namespace App\Http\Controllers\admin;

use \App\Models\Buku;
use \App\Models\User;
use \App\Models\Order;
use App\Exports\BukuExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class BukuExportController extends Controller
{
    public function excel()
    {
        $nama_file = 'laporan_history_'.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new BukuExport, $nama_file, \Maatwebsite\Excel\Excel::XLSX);
    }

    public function pdf()
    {
        $items = Buku::with(['kategori'])->get();
        $pdf = Pdf::loadView('pages.admin.buku.pdf.index', compact('items'))->setPaper('a4', 'landscape');
        return $pdf->download('laporan_history_'.date('Y-m-d_H-i-s').'.pdf');
    }

}
