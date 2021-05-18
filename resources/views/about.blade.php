
@extends('template.header')
@section('style-tambahan')
<link rel="stylesheet" href="{{url('/css/about.css')}}">
@endsection
@section('title', 'about')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center" >
        <div class="col-xl-5 col-sm-12 imgOne">
            <img src="{{url('/img/happyChef.png')}}" alt="">
        </div>
        <div class="col-xl-7 col-sm-12">
            <span class="title">A Tasty and Healthy Food</span>
            <p class="captionKu">We are here to provide a healthy and tasty food for you,
                so you can eat well without worrying the calories and your weight.
                The food here is being formulated by certified nutrionist
                and having a laboratory test.</p>
        </div>
    </div>
</div>
<div class="container my-5 text-center">
    <span class="title">Our Services</span>
    <div class="row ">
        <div class="col-xl-3 col-sm-12 card mx-auto one">
            <img src="https://img.icons8.com/cute-clipart/512/000000/flower-delivery.png" />
            <div class="card-title text-center font-weight-bold">Loss Weight</div>
            <p class="card-text text-center"> This food is made for the one who wants to loss some weight. </p>
        </div>
        <div class="col-xl-3 col-sm-12 card mx-auto two">
            <img src="https://img.icons8.com/plasticine/400/000000/customer-support.png" />
            <div class="card-title text-center font-weight-bold">Customer Services</div>
            <p class="card-text text-center">You can contact us if you need something to ask </p>
        </div>
        <div class="col-xl-3 col-sm-12 card mx-auto three">
            <img src="https://img.icons8.com/bubbles/500/000000/money-bag.png" />
            <div class="card-title text-center font-weight-bold">Affordable Price</div>
            <p class="card-text text-center">We make sure to put the best price for our food</p>
        </div>
    </div>
</div>
@endsection
