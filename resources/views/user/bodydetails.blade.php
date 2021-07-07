@extends('template.header')
@section('style-tambahan')
<link rel="stylesheet" href="{{url('/css/index.css')}}">
@endsection
@section('title', 'View Body')
@section('content')
<body>
    <div class="container-fluid">
        @foreach ($list as $massatubuh)
            <ul>
                <li>Nama User : {{$massatubuh->user->name}}</li>
                <li>Berat Badan : {{ $massatubuh->weight }}</li>
                <li>Tinggi Badan : {{ $massatubuh->height }}</li>
                <li>Hasil Perhitungan : {{ $massatubuh->hasil }}</li>
                <li>Kategori Tubuh :
                    @if ($massatubuh->hasil < 18.5)
                        Berat Badan Kurang
                    @elseif ($massatubuh->hasil >= 18.5 && $massatubuh->hasil <= 22.9)
                        Berat Badan Normal
                    @elseif ($massatubuh->hasil > 22.9 && $massatubuh->hasil <= 29.9)
                        Beresiko Obesitas
                    @else
                        Obesitas
                    @endif
                </li>
            </ul>
        @endforeach
    </div>
</body>
@endsection