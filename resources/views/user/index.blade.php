
@extends('template.header')
@section('style-tambahan')
<link rel="stylesheet" href="{{url('/css/index.css')}}">
@endsection
@section('title', 'Home')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-xl-4 col-sm-12 imgOne animate__animated animate__slideInLeft">
            <img src="{{url('/img/—Pngtree—healthy food_3776802.png')}}" alt="">
        </div>
        <div class="col-xl-8 col-sm-12 animate__animated animate__slideInRight">
            <span class="title">A Tasty and Healthy Food</span>
            <p class="captionKu">We are here to provide a healthy and tasty food for you,
                so you can eat well without worrying the calories and your weight.
                The food here is being formulated by certified nutrionist
                and having a laboratory test.</p>
            <a class="explore btn" href="{{ route('user.menu') }}">Explore Now</a>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row">
        <div class="col-sm-7 animate__animated animate__slideInLeft">
            <span class="title">Who Are We?</span>
            <p class="captionKu">NutrienFoods is a company who wants
                to provide a healthy meal for our customer.
                we realize that every customers has their own body goals and
                needs. So, we decided to make a 3 types of food depends on
                user’s body mass index </p>
        </div>
        <div class="col-sm-5 imgChef mx-auto animate__animated animate__slideInRight">
            <img class="mx-auto d-block" src="{{url('/img/happyChef.png')}}" alt="" style="width: 100%;">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-sm-12 card offset-xl-1 my-5">
            <img class="mx-auto d-block" src="{{url('/img/—Pngtree—healthy food_3776802.png')}}" alt="" style="width: 70%">
            <div class="card-title text-center fw-bold">Loss Weight</div>
            <p class="card-text text-center"> This food is made for the one who wants to loss some weight. </p>
        </div>
        <div class="col-xl-3 col-sm-12 card offset-xl-1 my-5">
            <img class="mx-auto d-block" src="{{url('/img/hotpot.png')}}" alt="" style="width: 70%">
            <div class="card-title text-center fw-bold">Stable Weight</div>
            <p class="card-text text-center">This food is made for the one
                who wants to stabilize their weight </p>
        </div>
        <div class="col-xl-3 col-sm-12 card offset-xl-1 my-5">
            <img class="mx-auto d-block" src="{{url('/img/chickenRice.png')}}" alt="" style="width: 70%">
            <div class="card-title text-center fw-bold">Gain Weight</div>
            <p class="card-text text-center">This food is made for the one who
                wants to gain some weight.</p>
        </div>
    </div>
</div>

@endsection 
