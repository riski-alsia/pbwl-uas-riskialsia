@extends('layouts.app')

@section('content')

<h2>Data Pembayaran</h2>
<a class="btn btn-success" href="{{ url('pembayaran/create')}}">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nisn</th>
        <th>Tanggal Bayar</th>
        <th>Bulan Bayar</th>
        <th>Tahun Bayar</th>
        <th>Id Spp</th>
        <th>Jumlah Bayar</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_pembayaran}}</td>
        <td>{{ $row->nisn}}</td>
        <td>{{ $row->tgl_bayar}}</td>
        <td>{{ $row->bulan_bayar}}</td>
        <td>{{ $row->tahun_bayar}}</td>
        <td>{{ $row->id_spp}}</td>
        <td>{{ $row->jumlah_bayar}}</td>
        <td><a class="btn btn-success" href="{{ url('pembayaran/edit/'. $row->id_pembayaran )}}">Edit</a>
        </td>
        <td><form action="{{url('pembayaran/' .$row->id_pembayaran)}}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-success" onclick="return confirm('Apakah yakin ingin dihapus')">Delete</button>
        </form></td>
    </tr> 
    @endforeach
</table>
@endsection