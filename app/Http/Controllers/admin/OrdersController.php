<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $items = Order::with(['user', 'buku'])->get();

        return view('pages.admin.order.index', [
            'items' => $items
        ]);
    }

    public function complete($id)
    {
        Order::where('id', $id)->update([
            'status' => 'Selesai'
        ]);

        $order = Order::select('id', 'buku_id')->where('id', $id)->first();

        Buku::where('id', $order->buku_id)->increment('stock');

        return redirect('/dashboard/order')->with("berhasil", "Sukses mengubah status peminjaman!!.");
    }
}
