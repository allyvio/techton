@extends('layouts.master')
@section('content')
<h1>List berita</h1>
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama berita</th>
            <th scope="col">Reporter</th>
            <th scope="col">Tanggal tayang</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Spongebob lulus S1</td>
            <td>Allyvio</td>
            <td>26 Feb 2022</td>
            <td>
                <button class="btn btn-primary">Detail</button>
                <button class="btn btn-danger">Hapus</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection