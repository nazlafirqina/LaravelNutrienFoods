@extends('admin.template')

@section('title')
    Create Jenis Tubuh
@endsection

@section('content')
<form action="{{ route('admin.jenisTubuh.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="jenistubuh">Nama Jenis Tubuh</label>
        <input type="text" value="{{old('jenistubuh')}}" class="form-control" name="jenistubuh" id="jenistubuh" aria-describedby="emailHelp">
        @error('jenistubuh')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi Jenis Tubuh</label>
        <input type="text" value="{{old('deskripsi')}}" class="form-control" name="deskripsi" id="deskripsi">
        @error('deskripsi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
