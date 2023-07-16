@extends('layouts.app')

@section('content')

<h2>Data Siswa</h2>
<a class="btn btn-success" href="{{ url('siswa/create')}}">Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nisn</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telpon</th>
        <th>Id Spp</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_siswa}}</td>
        <td>{{ $row->nisn}}</td>
        <td>{{ $row->nama}}</td>
        <td>{{ $row->alamat}}</td>
        <td>{{ $row->no_telp}}</td>
        <td>{{ $row->id_spp}}</td>
        <td><a class="btn btn-success" href="{{ url('siswa/edit/'. $row->id_siswa )}}">Edit</a>
        </td>
        <td><form action="{{url('siswa/' .$row->id_siswa)}}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-success" onclick="return confirm('Apakah yakin ingin dihapus')">Delete</button>
        </form></td>
    </tr> 
    @endforeach
</table>
@endsection
