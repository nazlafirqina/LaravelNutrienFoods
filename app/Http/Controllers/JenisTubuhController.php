<?php

namespace App\Http\Controllers;

use App\Models\JenisTubuh;
use Illuminate\Http\Request;

class JenisTubuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jenisTubuh.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenisTubuh.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('admin.makanan.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisTubuh  $jenisTubuh
     * @return \Illuminate\Http\Response
     */
    public function show(JenisTubuh $jenisTubuh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisTubuh  $jenisTubuh
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisTubuh $jenisTubuh)
    {
        return view('admin.jenisTubuh.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisTubuh  $jenisTubuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisTubuh $jenisTubuh)
    {
        return redirect()->route('admin.makanan.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisTubuh  $jenisTubuh
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisTubuh $jenisTubuh)
    {
        //
    }
}
