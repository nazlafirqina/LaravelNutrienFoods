@extends('admin.template')

@section('title')
    LIST TIPE MAKANAN
@endsection
@section('content')
    <div class="row">
        <a class="btn btn-primary" href="{{ route('admin.tipeMakanan.create') }}">Tambah Tipe Makanan</a>
    </div>
    <table class="table my-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipe Makanan</th>
                <th scope="col">Deksripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($listTipe as $tipeMakanan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $tipeMakanan->namaTipe }}</td>
                    <td>{{ $tipeMakanan->description }}</td>
                    <td class="row">
                        <a href="{{ route('admin.tipeMakanan.edit', $tipeMakanan->id) }}" class="btn btn-primary mx-2">Edit</a>
                        <form action="{{ route('admin.tipeMakanan.delete', $tipeMakanan->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection
