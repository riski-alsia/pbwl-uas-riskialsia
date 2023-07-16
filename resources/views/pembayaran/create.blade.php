@extends('layouts.app')

@section('content')

<h2>Tambah Data Pembayaran</h2>

<form action="{{ url('/pembayaran')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Nisn</label>
        <input type="text" name="nisn" class="form-control" placeholder="Nisn">
    </div>
    <div class="mb-3">
        <label for="">Tanggal Bayar</label>
        <input type="text" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar">
    </div>
    <div class="mb-3">
        <label for="">Bulan Bayar</label>
        <input type="text" name="bulan_bayar" class="form-control" placeholder="Bulan Bayar">
    </div>
    <div class="mb-3">
        <label for="">Tahun Bayar</label>
        <input type="text" name="tahun_bayar" class="form-control" placeholder="Tahun Bayar">
    </div>
    <div class="mb-3">
        <label for="">Id Spp</label>
        <input type="text" name="id_spp" class="form-control" placeholder="ID SPP">
    </div>
    <div class="mb-3">
        <label for="">Jumlah Bayar</label>
        <input type="text" name="jumlah_bayar" class="form-control" placeholder="Jumlah Bayar">
    </div>
    <div class="mb-3">
        <input class="btn btn-warning" type="submit" name="" id="" value="SIMPAN">
    </div>
</form>

@endsection
