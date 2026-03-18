<!DOCTYPE html>
<html lang="lv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Atgadnis') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-800">
        <nav class="flex justify-between items-center p-6 bg-white shadow">
            <a href="/" class="text-xl font-bold">Atgadnis</a>

            <div class="space-x-4">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="text-blue-500">Pieslegties</a>
                @endif

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Registreties</a>
                @endif
            </div>
        </nav>

        <div class="min-h-screen flex flex-col items-center pt-10 pb-10 px-4">
            <div class="w-full sm:max-w-md bg-white shadow-md rounded-lg p-6">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
