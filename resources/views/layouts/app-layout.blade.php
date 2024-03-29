<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stand.art | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-50 dark:bg-gray-900 dark:text-white antialiased ">


    @livewire('layouts.sidebar')
    @livewire('layouts.navbar')

    {{-- Content Page --}}
    <div class="p-4 lg:ml-64">
        <div class="p-4 rounded-lg mt-14">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
    <script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>
