@extends('admin.template')

@section('title')
    Edit Status
@endsection

@section('content')
<div class="container my-5">
    @foreach($status as $list)
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">User ID: {{ $list->idUser }}</h5>
        <h5 class="card-title">Transaction ID: {{ $list->id }}</h5>
        <form action="{{route('admin.status.bayar')}}" method="post">
            @csrf
            <input type="hidden" name="id_user" value="{{ $list->idUser }}">
            <button type="submit" class="btn btn-primary">Sudah bayar</button>
        </form>
        <form action="{{route('admin.status.kirim')}}" method="post">
            @csrf
            <input type="hidden" name="id_user" value="{{ $list->idUser }}">
            <button type="submit" class="btn btn-primary">Sudah dikirim</button>
        </form>
    </div>
    @endforeach
    </div>
</div>
@endsection