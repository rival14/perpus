<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use \App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.admin.user.admin.index',[
            'users' => User::where('roles', 'admin')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required|min:3|max:255|string",
            'username' => "required|min:3|max:255|string",
            'telp' => "required|numeric|min:9",
            'email' => "required|string|email|max:255|unique:users",
            'password' => "required|string|min:6|",
            'roles' => "required|string",
        ]);

        $validatedData["password"] = bcrypt(($validatedData["password"]));
        User::create($validatedData);
        return redirect('/dashboard/user')->with("berhasil", "Admin Baru Berhasil dibuat!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view("pages.admin.user.admin.edit",[
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $validatedData = $user;

        $validatedData = $request->validate([
            'name' => "required|min:3|max:255|string",
            'username' => "required|min:3|max:255|string",
            'telp' => "required|numeric|min:9",
            'email' => "required|string|email|max:255|unique:users",
            'password' => "required|string|min:6|",
        ]);

        $validatedData["password"] = bcrypt(($validatedData["password"]));
        User::where('id', $id)->update($validatedData);
        return redirect('/dashboard/user')->with("berhasil", "Admin Baru Berhasil diubah!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/dashboard/user')->with("berhasil", "Admin Baru Berhasil dihapus!");
    }
}
