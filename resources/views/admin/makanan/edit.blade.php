@extends('admin.template')

@section('title')
    Edit Makanan
@endsection

@section('content')
<form action="{{ route('admin.makanan.update', $Makanan->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="namamakanan">Nama Makanan</label>
        <input type="text" value="{{old('namamakanan') ? old('namamakanan') : $Makanan->namaMakanan}}" class="form-control" name="namamakanan" id="namamakanan" aria-describedby="emailHelp">
        @error('namamakanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Makanan</label>
        <input type="text" value="{{old('deskripsi') ? old('deskripsi') : $Makanan->description}}" class="form-control" name="deskripsi" id="deskripsi">
        @error('deskripsi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="calories">Jumlah Kalori </label>
        <input type="number" value="{{old('calories') ? old('calories') : $Makanan->calories}}" class="form-control" name="calories" id="calories">
        @error('calories')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Harga Makanan</label>
        <input type="text" value="{{old('price') ? old('price') : $Makanan->price}}" class="form-control" name="price" id="price">
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Tipe Makanan</label>
        <input type="text" value="{{old('idTypeMakanan') ? old('idTypeMakanan') : $Makanan->idTypeMakanan}}" class="form-control" name="idTypeMakanan" id="idTypeMakanan">
        @error('idTypeMakanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
