@extends('layout.master')

@section('judul')
Tambah Cast
@endsection

@section('content')

<form action="/fNpm21312060/{{ $npm21312060->id }}" method="post">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label>NPM</label>
        <input type="number" name="npm" value="{{ $npm21312060->npm }}" class="form-control">
        @error('npm')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $npm21312060->nama }}" class="form-control">
        @error('nama')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    
    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ $npm21312060->alamat }}</textarea>
        @error('Alamat')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
