@extends('layout.admin')
@section('judul')
Data Pelanggan
@endsection
<!-- Page Heading -->

@section('tabel')

<div class="p-3">
  <a href="/tambahpelanggan" class="btn btn-primary my-3">Tambah Data
    Pelanggan</a>
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Alamat</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">No Handphone</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($profile as $key) <tr>

        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$key->nama}}</td>
        <td>{{ $key->alamat}}</td>
        <td>{{ $key->jenis_kelamin}}</td>
        <td>{{ $key->no_telephone}}</td>

        <td class="mr-3"> <a href="/customer/{{$key->id}}" class="btn btn-info">Show </a> <a
            href="/customer/{{$key->id}}/edit" class="btn btn-success">Edit</a> <a href="/customer/ {{$key->id }}"
            class="btn btn-danger" data-confirm-delete="true">Delete</a> </td>
</div>
</tr> {{--tidak ada data --}}
@endforeach
</tbody>
</table>
</div>
@endsection


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />