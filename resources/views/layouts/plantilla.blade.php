<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--favicon-->
</head>

<body>

    <header>
        <h1>Recursos</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('resources.index')}}">Courses</a></li>
            </ul>
        </nav>
    </header>


    @yield('content')
</body>

</html>