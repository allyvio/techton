@extends('layouts.master')
@section('content')
<h1 class="mt-3">Update Berita</h1>

<div class="row">
    <div class="col-6">
        <form action="/post-berita" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Judul berita</label>
                <input type="text" class="form-control" required name="title" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Reporter</label>
                <input type="text" class="form-control" required name="reporter" value="{{$data->reporter}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Konten berita</label>
                <textarea class="form-control" rows="3" required name="content">{{$data->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection