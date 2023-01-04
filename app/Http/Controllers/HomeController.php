<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){

        $items = Buku::with(['kategori'])->latest()->paginate(9);
        // $items->sinopsis = Str::limit($items->sinopsis, 50);
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
