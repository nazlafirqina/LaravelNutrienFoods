<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
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
        return view('admin.makanan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(makanan $makanan)
    {
        return view('admin.makanan.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, makanan $makanan)
    {
        return redirect()->route('admin.makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(makanan $makanan)
    {
        return redirect()->route('admin.makanan.index');
        
    }
}
