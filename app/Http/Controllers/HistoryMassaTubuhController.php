<?php

namespace App\Http\Controllers;

use App\Models\HistoryMassaTubuh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HistoryMassaTubuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.formweight');
        
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'height' => 'required',
            'weight' => 'required'
        ]);

        HistoryMassaTubuh::create([
            'idUser' => Auth::user()->id,
            'height' => $request->height,
            'weight' => $request->weight
        ]);

        return redirect()->route('user.menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryMassaTubuh  $historyMassaTubuh
     * @return \Illuminate\Http\Response
     */
    public function show(HistoryMassaTubuh $historyMassaTubuh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryMassaTubuh  $historyMassaTubuh
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryMassaTubuh $historyMassaTubuh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoryMassaTubuh  $historyMassaTubuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoryMassaTubuh $historyMassaTubuh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryMassaTubuh  $historyMassaTubuh
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryMassaTubuh $historyMassaTubuh)
    {
        //
    }
}
