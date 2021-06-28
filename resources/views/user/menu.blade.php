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
                    <div class="card">
                        <img class="card-img-top" src="{{ url('storage/' . $makanan->image) }}" alt="Card image cap"
                            style="width:100px">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title font-weight-bold">{{ $makanan->namaMakanan }}</h5>
                                <h6 class="font-weight-bold price">Rp. {{ $makanan->price }}</h6>
                            </div>
                            <p class="card-text">{{ $makanan->description }}</p>
                            <p class="font-weight-bold align-text-bottom text-info">Loss Weigt</p>
                            <div class="d-flex justify-content-between">
                                <form action="{{route('user.cart.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_makanan" value="{{ $makanan->id }}">
                                    <button type="submit" class="buttonBuy text-center text-light font-weight-bold">Add To Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
