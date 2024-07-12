<x-layout>
    <div class="bg-gray-100 flex flex-col justify-end items-center h-screen w-full mb-10">
        <div class="bg-gray-300 p-5 w-11/12 md:w-7/12  shadow-lg flex justify-around rounded-full">
            <div>
                <img src="{{ asset('Images/home_20dp.png') }}" alt="" class="w-7 mx-auto">
                <h1 class="text-center">Inicio</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono 2.png') }}"alt="" class="w-7 mx-auto">
                <h1 class="text-center">Mapa</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono10.png') }}"alt="" class="w-7 mx-auto">
                <h1>Calendario</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono1.png') }}"alt="" class="w-7 mx-auto">
                <h1 class="text-center">Agregar</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono3.png') }}"alt="" class="w-7 mx-auto">
                <h1 class="text-center">Tips</h1>
            </div>
        </div>
    </div>
</x-layout>
