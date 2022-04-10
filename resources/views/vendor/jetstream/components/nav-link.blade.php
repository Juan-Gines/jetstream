@props(['active'])

{{-- Este componente es un link de nav y debemos pasarle un boleano a la variable active  
    También le podemos pasar attributos que se mergearan con las clases predefinidas que podemos modificar pero no aquí. 
    Para modificar estos componentes es mejor publicarlos en la carpeta public y modificarlos allá, nos evitaremos problemas al updatear laravel o jetstream más adelante--}}

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
