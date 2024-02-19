<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <title>navbar</title>

</head>

<body>


    <nav class="bg-black w-auto">
        <div class="flex flex-wrap justify-between items-center w-screen py-4">
            <div class="flex flex-row items-center">
                <a href="{{ route('index') }}" class="flex items-center">
                    <img src="{{ asset('img/logo-codecrafthers.png') }}" class="h-24 bg-white shadow-2xl" />
                </a>
                <h1 class="text-white navbar-title">Administrador de recursos</h1>
            </div>
            <div class="pr-16">
                <a href="{{ route('resources.create') }}">
                    <button
                        class="bg-yellow-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-2xl items-end">
                        Crear recurso
                    </button></a>
            </div>
        </div>
    </nav>


</body>

</html>