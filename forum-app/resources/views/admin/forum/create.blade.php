@extends('admin/layouts/app')

@section('header')
    <h1 class="text-xl mr-1">Nova dúvida</h1>
@endsection

@section('content')

<x-alert />

<form action="{{ route('forum.store') }}" method="post" class="mx-auto p-5 w-full bg-gray-700">

    {{-- <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
    @include('admin/forum/partials/form')

</form>

@endsection