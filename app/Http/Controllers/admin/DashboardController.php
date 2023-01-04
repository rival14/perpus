<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Buku;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.admin.index',[
            'users' => User::all(),
            'jAnggota' => User::where('roles', 'user')->count(),
            'jBuku' => Buku::all()->count(),
        ]);
    }
}
