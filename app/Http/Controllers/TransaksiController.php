<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function viewcart()
    {
        $data = Cart::with('makanan')->where('idUser', Auth::user()->id)->get();
        return view('user.cart', [
            'carts' => $data,
        ]);
    }

    public function decreasecart(Request $request)
    {
        $data = Cart::where('idUser', Auth::user()->id)->where('idMakanan', $request->id_makanan)->first();
        if ($data) {
                $data->jumlahBarang = $data->jumlahBarang - 1;
                if ($data->jumlahBarang == 0){
                    $data->delete();
                    return redirect()->route('user.cart.list')->with('success', 'menghilangkan barang');
                }
                $data->save();
                return redirect()->route('user.cart.list')->with('success', 'mengurangi jumlah barang');
            }
    }

    public function addtocart(Request $request){
        $data = Cart::where('idUser', Auth::user()->id)->where('idMakanan', $request->id_makanan)->first();
        if ($data) {
            $data->jumlahBarang = $data->jumlahBarang + 1;
            $data->save();
            return redirect()->route('user.cart.list')->with('success', 'menambah jumlah barang');
        } else {
            Cart::create([
                'idUser' => Auth::user()->id,
                'idMakanan' => $request->id_makanan,
                'jumlahBarang' => 1
            ]);
            return redirect()->route('user.cart.list')->with('success', 'menambah item baru ke keranjang');
        }
    }

    public function docheckout(Request $request)
    {
        $data = Cart::with('makanan')->where('idUser', Auth::user()->id)->get();
        $t = Transaksi::create([
            'idUser' => Auth::user()->id,
            'totalBarang' => 0,
            'totalHarga' => 0,
        ]);
        $tb = 0;
        $th = 0;
        foreach ($data as $d) {
            DetailTransaksi::create([
                'idTransaksi' => $t->id,
                'idMakanan' => $d->makanan->id,
                'namaBarang' => $d->makanan->namaMakanan,
                'jumlahPembelian' => $d->jumlahBarang,
                'harga' => $d->makanan->price,
            ]);
            $th = $th + ($d->jumlahBarang * $d->makanan->price);
            $tb = $tb + $d->jumlahBarang;
            $d->delete();
        }

        $t->totalBarang = $tb;
        $t->totalHarga = $th;
        $t->save();

        return redirect()->route('user.transaction.list')->with('success', 'membuat transaksi');
    }

    public function listt()
    {
        $data = Auth::user()->transaction;
        return view('user.transaksi', [
            'trans' => $data,
        ]);
    }

    public function detailst(Request $request)
    {
        $data = DetailTransaksi::with('transaksi')->where('idTransaksi', $request->id_trans)->get();
        return view('user.detail_transaksi', [
            'detail' => $data,
        ]);
    }

    public function setStatus(){
        $data = Transaksi::all();
        return view('admin.status.status', [
            'status' => $data,
        ]);
    }

    public function updatestatusbayar(Request $request){
        $data = Transaksi::where('idUser', $request->id_user)->first();
        if ($data) {
            $data->bayar = 1;
            $data->save();
        }
        return redirect()->route('admin.status.view'); 
    }

    public function updatestatuskirim(Request $request){
        $data = Transaksi::where('idUser', $request->id_user)->first();
        if ($data) {
            $data->kirim = 1;
            $data->save();
        }
        return redirect()->route('admin.status.view'); 
    }
}
