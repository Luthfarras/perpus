@extends('template')

@section('content')

<div class="container">
  <form method="post" action="{{ url('buku') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Judul</label>
      <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{old('judul')}}">
    </div>
  <div class="mb-3">
    <label class="form-label">Penulis</label>
    <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{old('penulis')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Penerbit</label>
    <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" value="{{old('penerbit')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Tahun</label>
    <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{old('tahun')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Cover</label>
    <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover" value="{{old('cover')}}">
  </div>

  <div class="mb-3">
    <label class="form-label">Sinopsis</label>
    <input type="text" class="form-control @error('sinopsis') is-invalid @enderror" name="sinopsis" value="{{old('sinopsis')}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Stok</label>
    <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{old('stok')}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
