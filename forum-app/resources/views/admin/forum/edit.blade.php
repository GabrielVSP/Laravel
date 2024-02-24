@extends('admin/layouts/app')

@section('header')
<h1>Editar dúvida #{{$support->subject}}</h1>
@endsection

@section('content')

<x-alert />

<form action="{{ route('forum.update', $support->id) }}" method="post" class="mx-auto p-5 w-full bg-gray-700">

    {{-- <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"> --}}
    {{-- <input type="text" name="_method" value="PUT"> --}}

    @method('PUT')
    @include('admin/forum/partials/form', [
        'support' => $support
    ])

</form>
@endsection