@extends('layouts.app')

@section('content')

<h2>Edit Data Siswa</h2>

<form action="{{ url('siswa/'.$row->id_siswa)}}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">Nisn</label>
        <input type="text" name="nisn" class="form-control" placeholder="Nisn" value="{{$row->nisn}}">
    </div>
    <div class="mb-3">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$row->nama}}">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$row->alamat}}">
    </div>
    <div class="mb-3">
        <label for="">Telepon</label>
        <input type="text" name="no_telp" class="form-control" placeholder="Telepon" value="{{$row->no_telp}}">
    </div>
    <div class="mb-3">
        <label for="">Id Spp</label>
        <input type="text" name="id_spp" class="form-control" placeholder="ID SPP" value="{{$row->id_spp}}">
    </div>
    <div class="mb-3">
        <input class="btn btn-danger" type="submit" name="" id="" value="Update">
    </div>
</form>

@endsection
