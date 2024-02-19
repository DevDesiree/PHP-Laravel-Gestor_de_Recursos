@extends('layouts.plantilla')

@section('title', 'Resources')

@section('content')
<h1>Bienvenido a la página de recursos</h1>
@if (Session::has('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Éxito',
    text: '{{ Session::get("success") }}',
    showConfirmButton: true,
    timer: 2000
});
</script>
@endif

<div class="mt-4 container-search">
    <label for="search" class="block text-sm font-medium text-gray-700">Buscar por Título</label>
    <input type="text" name="search" id="search" class="mt-1 p-2 border rounded-md"
        placeholder="Escribe para buscar...">
</div>

<form method="GET" action="{{ route('index') }}" id="filter-form">
    @csrf
    <div class="mt-4">
        <label for="theme" class="block text-sm font-medium text-gray-700">Filtrar por Tema</label>
        <select name="theme" id="theme" class="mt-1 p-2 border rounded-md w-full" onchange="this.form.submit()">
            <option value="" selected>Selecciona un tema</option>
            @foreach ($themes as $theme)
            <option value="{{ $theme->id }}">{{ $theme->title }}</option>
            @endforeach
        </select>
    </div>
</form>

<form method="GET" action="{{ route('index') }}" id="filter-form">
    @csrf
    <div class="mt-4">
        <label for="resource_type" class="block text-sm font-medium text-gray-700">Filtrar por Tipo de Recurso</label>
        <select name="resource_type" id="resource_type" class="mt-1 p-2 border rounded-md w-full"
            onchange="this.form.submit()">
            <option value="" selected>Selecciona un tipo de recurso</option>
            @foreach ($resourceTypes as $resourceType)
            <option value="{{ $resourceType->id }}">{{ $resourceType->titleResource }}</option>
            @endforeach
        </select>
    </div>
</form>

<div class="flex flex-row flex-wrap gap-10 px-12 pt-4 w-auto">

    @foreach ($filteredResources as $resource)
    <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 resource-card">
        <div class="flex flex-row flex-wrap px-4 pt-4">

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton">
                    <li>
                        <a href="{{ route('resources.show', $resource) }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Ver</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="flex flex-col items-center gap-2 pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover object-center"
                src="{{ url(isset($resourceTypeImages[$resource->resourcetype->titleResource]) ? $resourceTypeImages[$resource->resourcetype->titleResource] : '/img/default.png') }}"
                alt="resource image" />
            <h6 class="mb-1 text-xxl px-4 text-center font-small text-gray-900 dark:text-white resource-author">
                {{ $resource->author }}
            </h6>
            <h5 class="mb-1 text-xl px-4 text-center font-medium text-gray-900 dark:text-white resource-title">
                {{ $resource->title }}
            </h5>
            <h5
                class="mb-1 text-lg px-4 text-center font-small font-bold {{ isset($resourceTypeColors[$resource->resourcetype->titleResource]) ? $resourceTypeColors[$resource->resourcetype->titleResource] : '' }}">
                {{$resource->resourcetype->titleResource }}
            </h5>
            <h5
                class="mb-1 text-lg px-4 text-center font-small text-gray-900 dark:text-white {{ isset($themeColors[$resource->theme->title]) ? $themeColors[$resource->theme->title] : '' }}">
                {{$resource->theme->title }}
            </h5>
            <h5 class="mb-1 text-xxl px-4 text-center font-small text-gray-900 dark:text-white">
                {{ $resource->extraResource->url }}
            </h5>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $resource->titleResource }}
            </h5>
            <h5 class="mb-1 text-md font-medium text-gray-900 dark:text-white">Fecha de creación:
                {{ $resource->created_at->format('d/m/Y') }}
            </h5>

            <div class="flex mt-6 md:mt-6">

                <a href="{{ route('resources.edit', $resource->id) }}"
                    class=" w-1/2 inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 
                            focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</a>

                <a href="{{ route('resources.show', $resource->id) }}"
                    class=" w-1/2 px-4 py-2 ms-2 text-sm font-medium text-white text-center focus:outline-none bg-green-600 rounded-lg border border-gray-200 
                            hover:bg-green-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 
                            dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Ver</a>

                {{-- <a href="{{ route('resources.destroy', $resource->id) }}"
                class=" w-1/3 px-2 py-2 ms-2 text-sm font-medium text-white text-center focus:outline-none
                bg-red-500 rounded-lg border border-gray-200 hover:bg-red-700 hover:text-white focus:z-10
                focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400
                dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Eliminar</a> --}}
            </div>
        </div>
    </div>

    @endforeach
</div>

@push('scripts')
<script src="{{ asset('js/search.js') }}"></script>
@endpush

@endsection