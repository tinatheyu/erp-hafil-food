<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen">

    {{-- Global Layout Wrapper --}}
    <div id="app" class="min-h-screen flex flex-col">

        {{-- Slot Konten --}}
        <main class="flex-1">
            @yield('content')
        </main>

    </div>

</body>

</html>
