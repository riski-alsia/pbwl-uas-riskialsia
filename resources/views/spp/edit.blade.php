@extends('layouts.app')

@section('content')

<h2>Edit Data Spp</h2>

<form action="{{ url('spp/'.$row->id_spp)}}" method="post">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="mb-3">
        <label for="">Tahun</label>
        <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="{{$row->tahun}}">
    </div>
    <div class="mb-3">
        <label for="">Nominal</label>
        <input type="text" name="nominal" class="form-control" placeholder="Nominal" value="{{$row->nominal}}">
    </div>
    <div class="mb-3">
        <input class="btn btn-danger" type="submit" name="" id="" value="Update">
    </div>
</form>

@endsection
