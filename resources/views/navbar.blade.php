<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/app.css">
    <title>navbar</title>

</head>

<body>


    <nav class="border-gray-200 bg-black dark:bg-gray-800 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4">
            <div>
                <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('img/logo-codecrafthers.png') }}" class="h-24 bg-white shadow-2xl" />
                </a>
            </div>
            <div>
                <h1 class="text-white">Administrador de recursos</h1>
            </div>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <a href="{{ route('resources.create') }}">
                    <button class="add-btn hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Crear recurso
                    </button></a>
            </div>
        </div>
    </nav>


</body>

</html>