@extends('layout.admin')

@section('judul', 'Tambah Profil Pelanggan')

@section('content')
<form action="/customer" method="POST">
    @csrf
<div class="form-group p-3">
    <label>Nama Lengkap </label>
    <input type="text" name='nama' class="form-control" placeholder="Masukan Nama Lengkap">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
</div>

<div class="form-group p-3">
    <label>Alamat</label>
    <input type="text" name='alamat' class="form-control" placeholder="Masukan Alamat">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
</div>

<div class="form-group p-3">
    <label>Jenis Kelamin</label>
    <input type="text" name='jenis_kelamin' class="form-control" placeholder="Masukan Jenis Kelamin">
        @error('jenis_kelamin')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
</div>

<div class="form-group p-3">
    <label>No Telephon</label>
    <input type="number" name='no_telephone' class="form-control" placeholder="Masukan No Handphone">
            @error('no_telephone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
</div>

<div class="p-3">
<button type="submit" class="btn btn-primary ">Submit</button>
</div>

</form>
@endsection