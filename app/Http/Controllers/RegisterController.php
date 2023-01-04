<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\User;

\Illuminate\Session\Middleware\StartSession::class;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required|min:3|max:255|string",
            'username' => "required|min:3|max:255|string",
            'jKelamin' => "required|string",
            'alamat' => "required",
            'tLahir' => "required|date",
            'telp' => "required|numeric|min:9",
            'email' => "required|string|email|max:255|unique:users",
            'password' => "required|string|min:6|"
        ]);

        $validatedData["password"] = bcrypt(($validatedData["password"]));

        User::create($validatedData);
        return redirect('/login')->with("berhasil", "Regiristrasi Berhasil!, Silahkan Login!");

    }
}
