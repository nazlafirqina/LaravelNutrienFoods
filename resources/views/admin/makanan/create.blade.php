@extends('admin.template')

@section('title')
    Create Makanan
@endsection

@section('content')
    <form action="{{ route('admin.makanan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="namamakanan">Nama Makanan</label>
            <input type="text" value="{{ old('namamakanan') }}" class="form-control" name="namamakanan" id="namamakanan"
                aria-describedby="emailHelp">
            @error('namamakanan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Makanan</label>
            <input type="text" value="{{ old('deskripsi') }}" class="form-control" name="deskripsi" id="deskripsi">
            @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="calories">Jumlah Kalori </label>
            <input type="number" value="{{ old('calories') }}" class="form-control" name="calories" id="calories">
            @error('calories')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Harga Makanan</label>
            <input type="text" value="{{ old('price') }}" class="form-control" name="price" id="price">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tipeMakanan">Tipe Makanan</label>
            <select class="form-control" id="tipeMakanan" name="idTypeMakanan">
                @foreach ($listTipe as $t)
                    <option value="{{ $t->id }}" {{ old('idTypeMakanan') == $t->id ? 'selected' : '' }}>
                        {{ $t->namaTipe }}</option>
                @endforeach
            </select>
            @error('idTypeMakanan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Input Gambar</label>
            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
