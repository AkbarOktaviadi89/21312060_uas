@extends('layout.master')

@section('judul')
Tambah Data
@endsection

@section('content')

<form action="/fNpm21312060" method="post">
    @csrf
    
    <div class="form-group">
        <label>NPM</label>
        <input type="number" name="npm" value="{{ old('npm') }}" class="form-control @error('npm') is-invalid @enderror">
        @error('npm')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Alamat</label>
        <textarea type="text" name="alamat" value="{{ old('alamat') }}" class="form-control @error('alamat') is-invalid @enderror"></textarea>
        @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
