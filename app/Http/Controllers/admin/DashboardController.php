<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Buku;
use \App\Models\Order;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $items = Order::where('user_id', auth()->user(0)->id)->with('buku')->count();
        return view('pages.admin.index',[
            'users' => User::all(),
            'jAnggota' => User::where('roles', 'user')->count(),
            'jBuku' => Buku::all()->count(),
            'tBuku' => (Order::where('status', 'dipinjam')->count()) + (Order::where('status', 'selesai')->count()),
            'pinjam' => Order::where('status', 'dipinjam')->count(),
            'selesai' => Order::where('status', 'Selesai')->count(),
            'history' => Order::all()->count(),
        ]);
    }
}
