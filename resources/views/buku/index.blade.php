@extends('template')

@section('content')

<div class="container">
  <a href="{{route('buku.create')}}" class="btn btn-primary">Tambah Buku</a>
  <table class="table table-hover mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Cover</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{ $d['id'] }}</td>
        <td>{{ $d['judul'] }}</td>
        <td>{{ $d['penulis'] }}</td>
        <td>{{ $d['penerbit'] }}</td>
        <td>{{ $d['tahun'] }}</td>
        <td> <img src="{{ asset('storage/' .$d->cover) }}" alt="" width="100px"> </td>
        <td>
          <a href="{{ url('buku/' . $d->id . '/edit') }}" class="btn btn-warning"> <i class="fa fa-pen"></i> </a>
          <a href="{{ url('buku/' . $d->id . '/delete') }}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
