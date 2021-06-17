@extends('template.header')
@section('style-tambahan')
    <link rel="stylesheet" href="{{ url('/css/menu.css') }}">
@endsection
@section('title', 'Menu')
@section('content')
   
    <div class="container my-5">
        <div class="row">
            @foreach ($listMakanan as $makanan)
                <div class="card-deck">
                    <img class="card-img-top" src="{{ url('storage/' . $makanan->image) }}" alt="Card image cap" style="width:100px">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title font-weight-bold">{{ $makanan->namaMakanan }}</h5>
                            <h6 class="font-weight-bold price">{{ $makanan->price }}</h6>
                        </div>
                        <p class="card-text">{{ $makanan->deksripsi }}</p>
                        <div class="d-flex justify-content-between">
                            <p class="font-weight-bold align-text-bottom text-info">Loss Weigt</p>
                            <button class="buttonBuy text-center text-light font-weight-bold">Buy Now</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
