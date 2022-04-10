<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    @php
        $color="red";
        $alert="alert2";
    @endphp
    <body class="antialiased">
        <header class="text-center p-4 ">
            <h1 class="text-3xl font-bold">Ejemplos de componentes</h1>
        </header>
        {{-- Componente de blade --}}
        <div class="container mx-auto">
            {{-- Diferentes maneras de pasarle información al componente --}}
            <x-alert color="green">
                <x-slot name="title">
                    Correcto
                </x-slot>
                {{-- Lo que escribimos entre las etiquetas del compònente pasa como $slot --}}
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore porro ad sint sunt id eum quisquam nostrum dolores repudiandae explicabo, autem sapiente molestias rem ea fugiat aperiam dolore saepe tempora!
            </x-alert>

            {{-- Estoy pasandole datos de php al componente --}}
            <x-alert :color="$color">
                <x-slot name="title">
                    Cancelado
                </x-slot>
                Soy una alerta de Cancelado
            </x-alert>

            {{-- Pasamos atributos al componente class se reciben como $attributes--}}
            <x-alert color="yellow" class="mb-4">
                <x-slot name="title">
                    Cuidado
                </x-slot>
                Soy una alerta de Cuidado
            </x-alert>
            <x-alert color="blue">
                <x-slot name="title">
                    Información
                </x-slot>
                La información es algo primordial para mi
            </x-alert>
            
            {{-- Componente anonimo o sea no tiene clase. Es ideal para componentes simples --}}
            <x-alert2 color='blue' class="mb-4">
                <x-slot name='title'>
                    Información
                </x-slot>
                Soy una alerta azul
            </x-alert2>

            <x-alert2 > 
                <x-slot name='title'>
                    Peligro
                </x-slot>
                Esto es una cagada
            </x-alert2>
            
            {{-- Componentes dinámicos o se muestrará según nos venga la información --}}
            <x-dynamic-component :component="$alert">
                <x-slot name='title'>
                    Información
                </x-slot>
                Soy una alerta azul
            </x-dynamic-component>
        </div>
    </body>
</html>
