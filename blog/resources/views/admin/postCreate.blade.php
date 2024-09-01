@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Post</h1>
@stop

@section('content')
<div class="card card-primary" >
    <div class="card-header" >
        <h3 class="card-title"></h3>
    </div>

    <form action="{{route('admin.create')}}" method="POST">

        @csrf()

        <div class="card-body" >
            <div class="form-group" >
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="title">
            </div>
            <div class="form-group" >
                <label for="exampleInputPassword1">Content</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Content" name="content">
            </div>
        </div>

        <div class="card-footer" >
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
