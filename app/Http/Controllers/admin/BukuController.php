<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Buku;
use \App\Models\Kategori;
use Illuminate\Support\Str;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Buku::with(['kategori'])->get();

        return view('pages.admin.buku.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('pages.admin.buku.create',[
            'kategori' => $kategori
        ]);
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
            'kategoris_id' => 'required',
            'judul' => "required|max:255|string",
            'sinopsis' => "required",
            'image' => "image|file|max:2048",
            'genre' => "required|max:255|string",
            'stock' => "required|int",
            'alamat' => "required|max:10|string",
            'penerbit' => "required|max:50|string",
            'pengarang' => "required|max:50|string",
            'tPenerbit' => "required|max:255|string",
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['image'] = $request->file('image')->store("cover-image");
        $data["excerpt"] = Str::limit(strip_tags($request->sinopsis, 200));





        Buku::create($data, $validatedData);

        return redirect("/dashboard/buku")->with("success", "Buku baru sudah ditamabahkan!!.");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $items = Buku::findOrFail($id);
        return view('pages.admin.buku.show',[
            'items' => $items,
            'kategori' => Kategori::all()
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Buku::findOrFail($id);

        return view("pages.admin.buku.edit",[
            'items' => $items,
            'kategori' => Kategori::all()
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

        $validatedData = $request->validate([
            'kategoris_id' => 'required',
            'judul' => "required|max:255|string",
            'image' => "image|file|max:2048",
            'genre' => "required|max:255|string",
            'stock' => "required|int",
            'alamat' => "required|max:10|string",
            'penerbit' => "required|max:50|string",
            'pengarang' => "required|max:50|string",
            'tPenerbit' => "required|max:255|string",
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['image'] = $request->file('image')->store("cover-image");
        $data["excerpt"] = Str::limit(strip_tags($request->sinopsis, 200));

        $item = Buku::findOrFail($id);
        $item->update($data, $validatedData);


        return redirect('/dashboard/buku')->with("berhasil", "Buku Baru Berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::destroy($id);
        return redirect('/dashboard/buku')->with("berhasil", "Buku Baru Berhasil dihapus!");
    }
}
