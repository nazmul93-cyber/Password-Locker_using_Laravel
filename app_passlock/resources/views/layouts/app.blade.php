<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


    </head>
    
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            {{-- @include('layouts.navigation') --}}
            <x-navigation></x-navigation>

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="pl-4 pt-3 pb-1 h5 text-success">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


    </body>
</html>
