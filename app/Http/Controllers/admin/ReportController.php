<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view('pages.admin.report.index', compact('total_buku', 'judul_buku', 'order'));
    }
}
