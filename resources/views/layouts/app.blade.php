<!DOCTYPE html>
{{-- Nos encontramos en la estructura, plantilla que van a tener todas las paginas de nuestra aplicación
    Viene renderizada de la clase app\View\Components\AppLayout.php--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">

            {{-- LLamamos a un componente livewire llamado navigation-menu --}}
            @livewire('navigation-menu')

            <!-- Quitamos el header que es muy feo y solo utilizamos la barra de navegacion -->            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" ></script>
    </body>
</html>
