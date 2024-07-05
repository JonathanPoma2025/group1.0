<x-layout>

    <nav class="bg-gray-400 justify-end "></nav>

    <div class="bg-gray-100 flex flex-col justify-end items-center h-screen w-full mb-10">
        <div class="bg-gray-300 p-5 w-96 shadow-lg flex justify-around rounded-full">

            <div>
                <img src="{{ asset('Images/home_20dp.png') }}" alt="" class="w-7 item-center">
                <h1 class="text-center">Inicio</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono 2.png') }}"alt="" class="w-7">
                <h1 class="text-center">Asistente</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono7.png') }}"alt="" class="w-7">
                <h1>Calendario</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono1.png') }}"alt="" class="w-7">
                <h1 class="text-center">car</h1>
            </div>

            <div>
                <img src="{{ asset('Images/icono3.png') }}"alt="" class="w-7">
                <h1 class="text-center">Tips</h1>
            </div>

            <h1 class="text-2xl font-bold mb-4 text-center"></h1>
        </div>
    </div>

</x-layout>
