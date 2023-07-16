@extends('layouts.app')

@section('content')

<h2>Edit Data Pembayaran</h2>

<form action="{{ url('pembayaran/'.$row->id_pembayaran)}}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">Nisn</label>
        <input type="text" name="nisn" class="form-control" placeholder="Nisn" value="{{$row->nisn}}">
    </div>
    <div class="mb-3">
        <label for="">Tanggal Bayar</label>
        <input type="text" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar" value="{{$row->tgl_bayar}}">
    </div>
    <div class="mb-3">
        <label for="">Bulan Bayar</label>
        <input type="text" name="bulan_bayar" class="form-control" placeholder="Bulan Bayar" value="{{$row->bulan_bayar}}">
    </div>
    <div class="mb-3">
        <label for="">Tahun Bayar</label>
        <input type="text" name="tahun_bayar" class="form-control" placeholder="Tahun Bayar" value="{{$row->tahun_bayar}}">
    </div>
    <div class="mb-3">
        <label for="">Id Spp</label>
        <input type="text" name="id_spp" class="form-control" placeholder="ID SPP" value="{{$row->id_spp}}">
    </div>
    <div class="mb-3">
        <label for="">Jumlah Bayar</label>
        <input type="text" name="jumlah_bayar" class="form-control" placeholder="Jumlah Bayar" value="{{$row->jumlah_bayar}}">
    </div>
    <div class="mb-3">
        <input class="btn btn-danger" type="submit" name="" id="" value="Update">
    </div>
</form>

@endsection
