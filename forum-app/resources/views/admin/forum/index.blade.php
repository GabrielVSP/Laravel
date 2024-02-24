@extends('admin/layouts/app')

@section('title', 'Forum')
    
@section('header')
    @include('admin/forum/partials/header', [
        'total' => $supports->total()
    ])
@endsection

@section('content')

@include('admin/forum/partials/content')
    
<x-pagination :paginator="$supports" :appends="$filters" />

@endsection

{{-- {{$supports->links()}} --}}