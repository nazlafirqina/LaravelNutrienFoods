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
        return view('user.bodydetails', [
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
        $b = HistoryMassaTubuh::where('idUser', Auth::user()->id)->first();

        if ($b->idUser != 0 ){
            return redirect()->route('user.profile')->with('alert','You Have Entered Your Body Data');
        }else{
            return view('user.formweight');
        }
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

        return redirect()->route('user.profile');
    }

    public function show(HistoryMassaTubuh $historyMassaTubuh)
    {
        //
    }

    public function edit()
    {
        $body = HistoryMassaTubuh::with('user')->where('idUser', Auth::user()->id)->get();
        return view('user.updateformweight', [
            'body' => $body
        ]);
    }

    
    public function update(Request $request)
    {
        $val = $request->validate([
            'weight' => 'required',
            'height' => 'required',
        ]);
        $tinggi = $request->height;
        $berat =$request->weight;
        $tgg = $tinggi/100;
        $bmi = $berat/($tgg*$tgg);

        $b = HistoryMassaTubuh::where('idUser', Auth::user()->id)->first();

        $b->update([
            'height' => $request->height,
            'weight' => $request->weight,
            'hasil' => $bmi
        ]);

        return redirect()->route('user.profile');
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
