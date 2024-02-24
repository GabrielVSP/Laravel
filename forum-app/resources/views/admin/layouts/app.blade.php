<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>

    <header class="px-8 py-1 mb-3 flex justify-between flex-wrap shadow-lg">

        @yield('header')

    </header>

    <main class="w-4/5 mx-auto">


        @yield('content')

    </main>

    <footer>



    </footer>
    
</body>
</html>