<?php

namespace App\Http\Controllers;

use App\Models\TipeMakanan;
use Illuminate\Http\Request;

class TipeMakananController extends Controller
{

    public function index()
    {
        $data = TipeMakanan::all();
        return view('admin.tipeMakanan.index', [
            'listTipe' => $data,
        ]);
    }

    public function create()
    {
        return view('admin.tipeMakanan.create');
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        TipeMakanan::create([
            'namaTipe' => $request->nama,
            'description' => $request->deskripsi,
        ]);

        return redirect()->route('admin.tipeMakanan.index');
    }

    public function edit($id)
    {
        $data = TipeMakanan::find($id);

        return view('admin.tipeMakanan.edit', [
            'tipeMakanan' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipeMakanan  $tipeMakanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        TipeMakanan::find($id)->update([
            'namaTipe' => $request->nama,
            'description' => $request->deskripsi,
        ]);

        return redirect()->route('admin.tipeMakanan.index');
    }

    public function destroy($id)
    {
        TipeMakanan::find($id)->delete();
        return redirect()->route('admin.tipeMakanan.index');
    }
}
