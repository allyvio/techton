@extends('layouts.master')
@section('content')
<h1 class="mt-3">List berita</h1>
<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#formTambah">Tambah data</button>
<div class="modal fade" id="formTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah data berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/post-berita" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul berita</label>
                        <input type="text" class="form-control" required name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Reporter</label>
                        <input type="text" class="form-control" required name="report">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Konten berita</label>
                        <textarea class="form-control" rows="3" required name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
                <a href="/show-update/{{$post->id}}">
                    <button class="btn btn-secondary">Update</button>
                </a>
                <button class="btn btn-danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection