<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header>
                

                <div class="py-6 bg-white">
                   
                    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-screen-xl lg:px-8">
                        <div class="mt-2 mb-15 text-6xl text-gray-800 font-semibold"> <span class="border-b-8 border-blue-400">m</span><span class="text-blue-400">y</span><span class="border-b-8 border-blue-400">Todo</span> 
                        </div>
                        <div class="text-sm text-gray-400 mb-8 pb-4 border-b-2 border-gray-300">a simple todo list made with Laravel, Livewire, and Tailwind</div>
                    
                    </div>
                </div>
  
        </header>

        @yield('content')
    </div>
    @livewireScripts
    
</body>
</html>
