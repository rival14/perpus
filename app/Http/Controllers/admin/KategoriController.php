<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.admin.kategori.index',[
            'items' => Kategori::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.kategori.create',[
            'kategori' => Kategori::all(),
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


        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        Kategori::create($data);
        return redirect("/dashboard/buku-kategori")->with("success", "Kategori baru sudah ditamabahkan!!.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori, $id)
    {

        $kategori = Kategori::findOrFail($id);
        return view("pages.admin.kategori.edit",[
            'kategori' => $kategori,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Kategori::where('id', $id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect('/dashboard/buku-kategori')->with("berhasil", "Kategori Berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori, $id)
    {
        Kategori::destroy($id);
        return redirect('/dashboard/buku-kategori')->with("berhasil", "Buku Baru Berhasil dihapus!");
    }
}
