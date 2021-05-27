@extends('template.header')
@section('style-tambahan')
    <link rel="stylesheet" href="{{ url('/css/menu.css') }}">
@endsection
@section('title', 'Menu')
@section('content')
    {{-- <div class="container my-5">
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="{{url('/img/—Pngtree—healthy food_3776802.png')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title font-weight-bold">Caesar Salad</h5>
                    <h6 class="font-weight-bold price">Rp 49.000</h6>
                </div>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between">
                    <p class="font-weight-bold align-text-bottom text-info">Loss Weigt</p>
                    <button class="buttonBuy text-center text-light font-weight-bold">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{url('/img/hotpot.png')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title font-weight-bold">Hotpot Chicken</h5>
                    <h6 class="font-weight-bold price">Rp 49.000</h6>
                </div>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between">
                    <p class="font-weight-bold align-text-bottom text-info">Stable Weigt</p>
                    <button class="buttonBuy text-center text-light font-weight-bold">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{url('/img/chickenRice.png')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title font-weight-bold">Chicken Rice</h5>
                    <h6 class="font-weight-bold price">Rp 49.000</h6>
                </div>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between">
                    <p class="font-weight-bold align-text-bottom text-info">Gain Weigt</p>
                    <button class="buttonBuy text-center text-light font-weight-bold">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="container my-5">
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="{{url('/img/Soyu Ramen.png')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title font-weight-bold">Soyu Ramen</h5>
                    <h6 class="font-weight-bold price">Rp 49.000</h6>
                </div>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between">
                    <p class="font-weight-bold align-text-bottom text-info">Gain Weigt</p>
                    <button class="buttonBuy text-center text-light font-weight-bold">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{url('/img/TaichanSatay.png')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title font-weight-bold">Taichan Satay</h5>
                    <h6 class="font-weight-bold price">Rp 49.000</h6>
                </div>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between">
                    <p class="font-weight-bold align-text-bottom text-info">Loss Weigt</p>
                    <button class="buttonBuy text-center text-light font-weight-bold">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{url('/img/ramen.png')}}" alt="Card image cap">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title font-weight-bold">Organic Ramen</h5>
                    <h6 class="font-weight-bold price">Rp 49.000</h6>
                </div>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between">
                    <p class="font-weight-bold align-text-bottom text-info">Stable Weigt</p>
                    <button class="buttonBuy text-center text-light font-weight-bold">Buy Now</button>
                </div>
            </div>
        </div>
    </div> 
</div> --}}
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
