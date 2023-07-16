@extends('layouts.app')

@section('content')

<h2>Data Spp</h2>
<a class="btn btn-success" href="{{ url('spp/create')}}">Tambah Data</a>
<table class="table table-bordered">
    <tr> 
        <th>No</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach ($rows as $row)
    <tr>
        <td>{{ $row->id_spp}}</td>
        <td>{{ $row->tahun}}</td>
        <td>{{ $row->nominal}}</td>
        <td><a class="btn btn-success" href="{{ url('spp/edit/'. $row->id_spp )}}">Edit</a>
        </td>
        <td><form action="{{url('spp/' .$row->id_spp)}}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-success" onclick="return confirm('Apakah yakin ingin dihapus')">Delete</button>
        </form></td>
    </tr> 
    @endforeach
</table>
@endsection