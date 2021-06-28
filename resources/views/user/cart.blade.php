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

        .list-item {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .satuan-item {
            display: flex;
            flex-direction: row;
            gap: 20px;
            padding: 10px;
            border: 1px solid black;
            align-items: center
        }

        .detail-cart {
            margin: 20px 0;
            display: flex;
            flex-direction: column;
        }
    </style>
    <link rel="stylesheet" href="{{ url('/css/menu.css') }}">
@endsection

@section('title', 'Cart')

@section('content')
    <div class="container my-4">

        <h2>Halo, ini page cart</h2>

        <div class="list-item">
            @if (sizeof($carts) == 0)
                <div class="alert-danger">
                    Keranjang Kosong
                </div>
            @endif
            @foreach ($carts as $item)
                <div class="satuan-item">
                    <img src="{{ url('storage/' . $item->makanan->image) }}" alt="" style="width: 100px">
                    <strong>{{ $item->makanan->namaMakanan }}</strong>
                    <span>Jumlah Barang di Keranjang : {{ $item->jumlahBarang }}</span>
                    <form action="{{route('user.cart.decrease')}}" method="post">
                        @csrf
                        <input type="hidden" name="id_makanan" value="{{ $item->makanan->id }}">
                        <button type="submit" class="btn btn-primary">Kurangi 1 Item</button>
                    </form>
                    <form action="{{route('user.cart.add')}}" method="post">
                        @csrf
                        <input type="hidden" name="id_makanan" value="{{ $item->makanan->id }}">
                        <button type="submit" class="btn btn-primary">Tambah 1 Item</button>
                    </form>
                    <a href="#" class="btn btn-primary">Hapus Item</a>
                </div>
            @endforeach
                <div class="detail-cart">
                    @foreach ($carts as $item)
                    <span>TOTAL BARANG : {{ $item->jumlahBarang }}</span>
                    @endforeach
                    <span>TOTAL HARGA :</span>
                </div>
            <form action="{{ route('user.transaction.do') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Chekcout</button>
            </form>
        </div>
    </div>
@endsection
