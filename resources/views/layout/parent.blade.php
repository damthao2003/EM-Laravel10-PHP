<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
{{--    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href={{asset('bootstrap-icons-1.11.3\font\bootstrap-icons.min.css')}}>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


{{--  Nhúng CSS --}}
    @stack('styles')

</head>

<body>
    <header>
        @include('layout.header')
    </header>

    <main>
        @yield('main')
    </main>
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>--}}

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


</body>

</html>
