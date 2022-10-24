@extends('template')

@section('content')

<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Email</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{ $d['id'] }}</td>
        <td>{{ $d['name'] }}</td>
        <td>{{ $d['email'] }}</td>
        <td>{{ $d->kelas->nama_kelas }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
