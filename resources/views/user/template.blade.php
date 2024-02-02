<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BadminPlay | Home</title>

    @vite('resources/css/app.css')
</head>

<body>
    <header class="bg-[#da0037]">
        @include('user.partials.navbar')
    </header>

    @yield('content')

    <footer class="bg-[#444444] text-white">
        @include('user.partials.footer')
    </footer>
</body>

</html>
