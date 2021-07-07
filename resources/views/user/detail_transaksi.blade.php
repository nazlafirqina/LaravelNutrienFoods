@extends('template.header')
@section('style-tambahan')
    <style>
            @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

            body {
                font-family: 'DM Sans', sans-serif;
                background-color: #fcfcfc;
            }

            .nav-link {
                color: #14416b;
                font-size: 20px;
            }

            .navbar {
                background-color: #fff;
                box-shadow: 6px 6px 16px 4px rgba(155, 152, 152, 0.15);
            }

            .signUp {
                background-color: #f88d32;
                border: none;
                padding: 8px 16px;
                border-radius: 12px;
                font-size: 20px;
            }

            .list-trans {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .satuan-trans {
                display: flex;
                flex-direction: row;
                gap: 20px;
                padding: 10px;
                border: 1px solid black;
                align-items: center
            }

    </style>
@endsection
@section('title', 'Detail Transaksi')
@section('content')
<div class="container my-4">

        <h2>Halo, ini page transaksi</h2>

        <div class="list-trans">

            @foreach ($detail as $belanjaan)
                <div class="satuan-trans">
                    <span>
                        Nama Barang : {{ $belanjaan->namaBarang }}
                    </span>
                    <span>
                        Jumlah Barang : {{ $belanjaan->jumlahPembelian }}
                    </span>
                    <span>
                        total uang : <span class="money">{{ $belanjaan->harga }}</span>
                    </span>
                </div>
            @endforeach
            <a href="{{route('user.detail_transaksi.bayar')}}" class="btn btn-primary">Bayar</a>
        </div>
</div>
@endsection
