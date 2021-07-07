@extends('template.header')
@section('style-tambahan')
    <link rel="stylesheet" href="{{ url('/css/profile.css') }}">
@endsection
@section('title', 'Profile')
@section('content')
<body>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-3 mx-5 sidebar shadow">
                <h2>Sidebar</h2>
                <ul>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="{{ route('user.cart.list') }}">Cart</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="{{ route('user.transaction.list') }}">MY TRANS</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="{{ route('user.formweight.create') }}">Enter Body Type</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="{{ route('user.formweight.edit') }}">Update Body Type</a>
                    </li>
                </ul>
                <a class="btn btn-info me-2" href="{{ route('logout') }}">Logout</a>
            </div>
            @foreach ($detailprofil as $profil)
            <div class="offset-2 col-4 justify-content-center my-5">
                <img class="profil" src="{{url('/img/favpng_user-profile.png')}}" alt="profile picture">
                <div class="mrgn">
                    @foreach ($body as $massatubuh)
                        <h5>Nama User : {{$massatubuh->user->name}}</h5>
                        <br>
                        <h5>Berat Badan : {{ $massatubuh->weight }}</h5>
                        <br>
                        <h5>Tinggi Badan : {{ $massatubuh->height }}</h5>
                        <br>
                        <h5>Hasil Perhitungan : {{ $massatubuh->hasil }}</h5>
                        <br>
                        <h5>Kategori Tubuh :
                            @if ($massatubuh->hasil < 18.5)
                                Berat Badan Kurang
                            @elseif ($massatubuh->hasil >= 18.5 && $massatubuh->hasil <= 22.9)
                                Berat Badan Normal
                            @elseif ($massatubuh->hasil > 22.9 && $massatubuh->hasil <= 29.9)
                                Beresiko Obesitas
                            @else
                                Obesitas
                            @endif</h5>
                        <br>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
        alert(msg);
        }
    </script>
</body>
@endsection
