@extends('admin.template')

@section('title')
    LIST MAKANAN
@endsection
@section('content')
    <div class="row">
        <a class="btn btn-primary" href="{{ route('admin.makanan.create') }}">Tambah Makanan</a>
    </div>
    <table class="table my-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Makanan</th>
                <th scope="col">pict</th>
                <th scope="col">Deksripsi</th>
                <th scope="col">Calories</th>
                <th scope="col">Price</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listTipe as $makanan)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $makanan->namaMakanan }}</td>
                    <td><img src="{{url('storage/' . $makanan->image)}}" style="width: 100px" alt=""></td>
                    <td>{{ $makanan->description }}</td>
                    <td>{{ $makanan->calories }}</td>
                    <td>{{ $makanan->price }}</td>

                    <td class="row">
                        <a href="{{ route('admin.makanan.edit', $makanan->id) }}" class="btn btn-primary mx-2">Edit</a>
                        <form action="{{ route('admin.makanan.delete', $makanan->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
