@extends('admin.template')

@section('title')
    Edit Tipe Makanan
@endsection

@section('content')
    <form action="{{ route('admin.tipeMakanan.update', $tipeMakanan->id) }}" method="POST">
        @csrf
        <h2>Edit Tipe Makanan</h2>
        <div class="form-group">
            <label for="tipemakanan">Nama Tipe Makanan</label>
            <input type="text" value="{{old('nama') ? old('nama') : $tipeMakanan->namaTipe }}" class="form-control" name="nama" id="tipemakanan" aria-describedby="emailHelp">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Tipe Makanan</label>
            <input type="text" value="{{old('deskripsi') ? old('deskripsi') : $tipeMakanan->description}}" class="form-control" name="deskripsi" id="deskripsi">
            @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
