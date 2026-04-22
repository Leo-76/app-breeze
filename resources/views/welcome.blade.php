<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-50">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Laravel</h1>
                <div class="flex gap-4 justify-center">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Se connecter</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-6 py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50">S'inscrire</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
