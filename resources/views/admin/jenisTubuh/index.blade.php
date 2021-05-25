@extends('admin.template')

@section('title')
    LIST JENIS MAKANAN
@endsection
@section('content')
    <div class="row">
        <a class="btn btn-primary" href="{{ route('admin.jenisTubuh.create') }}">Tambah Jenis Tubuh</a>
    </div>
    <table class="table my-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Jenis Tubuh</th>
                <th scope="col">Deksripsi</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
@endsection
