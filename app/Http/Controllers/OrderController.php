<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request, $slug){


        return view('pages.order',[
            'items' => Buku::where('slug', $slug)->firstOrFail()
        ]);
    }

    public function store(Request $request)
    {
        Order::create([
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'order_number' => $this->generateOrderNumber(),
            'from' => $request->from,
            'to' => $request->to,
            'status' => 'Dipinjam',
        ]);

        Buku::where('id', $request->buku_id)->decrement('stock');

        return redirect('/')->with("success", "Sukses memesan buku!!.");
    }

    private function generateOrderNumber()
    {
        // Ambil nomor terakhir dari database
        $last_order = Order::latest()->first();

        // Jika tidak ada order sebelumnya, buat nomor order pertama
        if (!$last_order) {
            return "ORD-0001";
        }

        // Ambil tahun dan bulan saat ini
        $current_year = date("Y");
        $current_month = date("m");

        // Ambil tahun dan bulan dari nomor order terakhir
        $last_year = substr($last_order->order_number, 4, 4);
        $last_month = substr($last_order->order_number, 8, 2);

        // Jika tahun dan bulan saat ini sama dengan tahun dan bulan order terakhir, tambahkan nomor urut
        if ($current_year == $last_year && $current_month == $last_month) {
            $order_number = substr($last_order->order_number, -4);
            $order_number++;
            return "ORD-{$current_year}{$current_month}-" . sprintf("%04d", $order_number);
        }

        // Jika tidak, reset nomor urut menjadi 1
        return "ORD-{$current_year}{$current_month}-0001";
    }


}


