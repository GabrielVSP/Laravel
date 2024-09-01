@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')

<a href="{{route('admin.postCreate')}}">Create post</a>

<div class="row" >
    <div class="col-12" >
        <div class="card" >
            <div class="card-header" >
                <h3 class="card-title">All posts</h3>
                <div class="card-tools" >
                    <div class="input-group input-group-sm" style="width: 150px;" >
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append" >
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0" >
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->updated_at}}</td>
                            </tr>
                        @endforeach

                        

                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
