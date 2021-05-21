<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\TipeMakanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Makanan::all();
        return view('admin.makanan.index', [
            'listTipe' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = TipeMakanan::all();
        return view('admin.makanan.create', [
            'listTipe' => $data,
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
        $val = $request->validate([
            'namamakanan' => 'required',
            'deskripsi' => 'required',
            'calories' => 'required',
            'price' => 'required',
            'idTypeMakanan' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        $nameimg = time() . "." . $request->image->extension();
        $request->image->storeAs('public', $nameimg);

        Makanan::create([
            'namaMakanan' => $request->namamakanan,
            'description' => $request->deskripsi,
            'calories' => $request->calories,
            'price' => $request->price,
            'idTypeMakanan' => $request->idTypeMakanan,
            'image' => $nameimg,
        ]);
        return redirect()->route('admin.makanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Makanan::find($id);

        return view('admin.makanan.edit', [
            'Makanan' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'namamakanan' => 'required',
            'deskripsi' => 'required',
            'calories' => 'required',
            'price' => 'required',
            'idTypeMakanan' => 'required'
        ]);
        Makanan::find($id)->update([
            'namaMakanan' => $request->namamakanan,
            'description' => $request->deskripsi,
            'calories' => $request->calories,
            'price' => $request->price,
            'idTypeMakanan' => $request->idTypeMakanan
        ]);

        return redirect()->route('admin.makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Makanan::find($id)->delete();
        return redirect()->route('admin.makanan.index');
    }
}
