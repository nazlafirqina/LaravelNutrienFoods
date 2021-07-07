<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\User;
use App\Models\HistoryMassaTubuh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function menu(){
        $data = Makanan::all();
        return view('user.menu', [
            'listMakanan' => $data,
        ]);
    }

    public function profile(){
        $data = User::where('id', Auth::user()->id)->get();
        $body = HistoryMassaTubuh::with('user')->where('idUser', Auth::user()->id)->get();
        return view('user.profile', [
            'detailprofil' => $data, 'body' => $body
        ]);
    }
}
