@extends('template.header')
@section('style-tambahan')
<link rel="stylesheet" href="{{url('/css/contact.css')}}">
@endsection
@section('title', 'Home')
@section('content')
<div class="container my-5">
    <div class="row my-5">
        <div class="offset-5">
            <h1>Contact Us!</h1>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-4">
            <div class="form-row">
                <h2>Customer care</h2>
                <p>
                    PT. Nutrien Foods Indonesia
                    <br>
                    Jl. Manuk Miber
                    <br>
                    Surabaya, Jawa Timur
                </p>
                <p>
                    <strong>Layanan 24 Jam</strong>
                    <br>
                    Telp: 1500 123
                    <br>
                    Email: <em> <a href="mailto:nutrienfoods@gmail.com">nutrienfoods@gmail.com</a> </em>
            </div>
        </div>
        <div class="col-5">
            <form>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="nameInput" placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="nameInput" placeholder="Masukkan email Anda">
                </div>
                <div class="form-group">
                    <label for="inputPesan">Message</label>
                    <textarea class="form-control" id="pesan" rows="5" placeholder="Masukkan pesan Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection 


