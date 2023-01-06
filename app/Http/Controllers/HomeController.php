<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Order;

class HomeController extends Controller
{
    public function index(Request $request){

        $items = Buku::with(['kategori'])->latest();

        if ($request->search) {
            $items->where('judul', 'LIKE', "%$request->search%");
        }

        return view('pages.home',[
            'items' => $items->paginate(6)
        ]);
    }

    public function kategori(Request $request, $slug){

        $items = Buku::whereHas('kategori', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->latest();

        if ($request->search) {
            $items->where('judul', 'LIKE', "%$request->search%");
        }

        return view('pages.home',[
            'items' => $items->paginate(6)
        ]);
    }

    public function history()
    {
        $items = Order::where('user_id', auth()->user(0)->id)->with('buku');

        return view('pages.history', [
            'items' => $items->paginate(6)
        ]);
    }
}
