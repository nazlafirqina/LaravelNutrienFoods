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
        $data = HistoryMassaTubuh::with('user')->where('idUser', Auth::user()->id)->get();
        return view('user.profile', [
            'list' => $data,
        ]);

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
            'weight' => 'required',
        ]);
        $tinggi = $request->height;
        $berat =$request->weight;
        $tgg = $tinggi/100;
        $bmi = $berat/($tgg*$tgg);
        

        HistoryMassaTubuh::create([
            'idUser' => Auth::user()->id,
            'height' => $request->height,
            'weight' => $request->weight,
            'hasil' => $bmi
        ]);

        return redirect()->route('user.menu');
    }

    public function show(HistoryMassaTubuh $historyMassaTubuh)
    {
        //
    }

    public function edit(HistoryMassaTubuh $historyMassaTubuh)
    {
        //
    }

    
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
