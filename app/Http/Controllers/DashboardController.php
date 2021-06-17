<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function menu(){
        $data = Makanan::all();
        return view('user.menu', [
            'listMakanan' => $data,
        ]);
    }
}
