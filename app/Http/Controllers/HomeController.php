<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class HomeController extends Controller
{
    public function index(){

        $items = Buku::with(['kategori'])->latest()->paginate(6);
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
