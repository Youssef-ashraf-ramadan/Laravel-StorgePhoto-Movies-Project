@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1 class="text-center text-info">Edit Files</h1>
    <div class="container col-12 col-lg-6 col-xl-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("file.update" , $file->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input value="{{$file->title}}" type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" value="{{$file->desc}}" name="desc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Edit Your File - {{$file->mainFile}}</label>
                        <input type="file"  name="mainFile" class="form-control">
                    </div>
                    <button class="btn btn-info col-12">Update data</button>
                </form>
            </div>
        </div>
    </div>
@endsection