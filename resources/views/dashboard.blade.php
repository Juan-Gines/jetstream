<x-app-layout>
    {{-- Esta vista llama al componente de clase AppLayout que se encuentra en App/View/components/AppLayout.php 
        Notese que en la etiqueta utilizamos kebabcase que es x-palabra-palabra-etc.. palabras en minuscula separadas de guiones para llamar a la clase del componente --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alenta solutions {{-- Titulo del dashboard --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- El contenido del dashboard se pasa a layout.app en la variable $slot--}}
                <x-jet-welcome/>
            </div>
        </div>
    </div>
</x-app-layout>
