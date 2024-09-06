<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="font-sans antialiased">

    @extends('landing.layout.landing')

    @section('header')
        <x-landing.header title="OMEGA"></x-landing.header>
    @endsection

    @section('post')
        <section class="w-1/2 p-5 mt-5 flex mx-auto flex-col items-start justify-center shadow-md">
            <h1 class="text-4xl font-bold">{{ $data->title }}</h1>
            <p>{{ $data->content }}</p>
            <a href="{{url()->previous()}}" class="text-red-400 my-3 hover:text-lg duration-300">Go back</a>
            <aside>{{date('d/m/Y', strtotime($data->created_at))}}</aside>
        </section>
    @endsection

</body>
