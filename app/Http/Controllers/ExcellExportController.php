<?php

namespace App\Http\Controllers;

use App\Exports\HistoriExport;
use Maatwebsite\Excel\Excel;

use Illuminate\Http\Request;

class ExcellExportController extends Controller
{
     public function index()
    {
        $nama_file = 'laporan_history_'.date('Y-m-d_H-i-s').'.xlsx';
        return \Maatwebsite\Excel\Facades\Excel::download(new HistoriExport, $nama_file);
    }
}
