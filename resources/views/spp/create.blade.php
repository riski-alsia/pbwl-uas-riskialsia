@extends('layouts.app')

@section('content')

<h2>Tambah Data Spp</h2>

<form action="{{ url('/spp')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Tahun</label>
        <input type="text" name="tahun" class="form-control" placeholder="Tahun">
    </div>
    <div class="mb-3">
        <label for="">Nominal</label>
        <input type="text" name="nominal" class="form-control" placeholder="Nominal">
    </div>
    <div class="mb-3">
        <input class="btn btn-warning" type="submit" name="" id="" value="SIMPAN">
    </div>
</form>

@endsection
