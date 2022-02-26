@extends('layouts.master')
@section('content')
<h1 class="mt-3">List berita</h1>
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Judul berita</th>
            <th scope="col">Reporter</th>
            <th scope="col">Tanggal buat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->reporter}}</td>
            <td>{{date('d-M-Y', strtotime($post->created_at))}}</td>
            <td>
                <button class="btn btn-primary">Detail</button>
                <button class="btn btn-danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection