<x-layout>


    <nav class="bg-gray-400 justify-end "></nav>


    <div class="bg-gray-100 flex flex-col justify-end items-center h-screen w-full mb-12">
        <div class="bg-gray-300 p-5 w-3/4 shadow-lg flex justify-between rounded-full">

            <div>
                <img src="{{ asset('Images/home_20dp.png') }}" alt="" class="w-7">
                <h1>Inicio</h1>
            </div>

            <div>
            <img src="{{ asset('Images/icono4.png') }}"alt="" class="w-7">
            <h1>Asistente</h1>
            </div>

            <div>
            <img src="{{ asset('Images/icono1.png') }}"alt="" class="w-7">
            <h1>Add car</h1>
            </div>

            <div>
            <img src="{{ asset('Images/icono3.png') }}"alt="" class="w-7">
            <h1>Tips</h1>
            </div>

            <h1 class="text-2xl font-bold mb-4 text-center"></h1>
        </div>
    </div>

</x-layout>
