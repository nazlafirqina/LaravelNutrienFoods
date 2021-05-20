@extends('admin.template')

@section('title')
    Create Makanan
@endsection

@section('content')
    <form action="{{ route('admin.makanan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="namamakanan">Nama Makanan</label>
            <input type="text" value="{{old('namamakanan')}}" class="form-control" name="namamakanan" id="namamakanan" aria-describedby="emailHelp">
            @error('namamakanan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Makanan</label>
            <input type="text" value="{{old('deskripsi')}}" class="form-control" name="deskripsi" id="deskripsi">
            @error('deskripsi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="calories">Jumlah Kalori </label>
            <input type="number" value="{{old('calories')}}" class="form-control" name="calories" id="calories">
            @error('calories')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Harga Makanan</label>
            <input type="text" value="{{old('price')}}" class="form-control" name="price" id="price">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection