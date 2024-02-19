<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--favicon-->
</head>

<body>

    <header>
        @include('navbar')
        <h1>Recursos</h1>



    </header>


    @yield('content')
</body>

</html>