<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;

class OrderController extends Controller
{
    public function index(Request $request, $slug){


        return view('pages.order',[
            'items' => Buku::where('slug', $slug)->firstOrFail()
        ]);
    }


}


