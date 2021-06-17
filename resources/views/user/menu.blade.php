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
                    <img class="card-img-top" src="{{ url('storage/' . $makanan->image) }}" alt="Card image cap"
                        style="width:100px">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $makanan->namaMakanan }}</h5>
                        <h6 class="font-weight-bold price">{{ $makanan->price }}</h6>
                        <p class="card-text">{{ $makanan->deksripsi }}</p>
                        <p class="font-weight-bold align-text-bottom text-info">Loss Weigt</p>
                        <form action="{{route('user.cart.add')}}" method="post">
                            @csrf
                            <input type="hidden" name="id_makanan" value="{{ $makanan->id }}">
                            <button type="submit" class="buttonBuy text-center text-light font-weight-bold">Add To Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
