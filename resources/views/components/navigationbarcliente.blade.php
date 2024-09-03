<x-layout>
    <nav class="bg-ourblack bg-opacity-60 backdrop-blur p-5 w-11/12 md:w-5/12 shadow-lg rounded-full fixed bottom-10 left-1/2 transform -translate-x-1/2">
        <div class="flex justify-around">

            <a href="/users/home">
                <button>
                    <img src="{{ asset('Images/new1.png') }}" alt="" class="w-7 mx-auto">
                    <h1 class="text-center text-white">Inicio</h1>
                </button>
            </a>

            <a href="">
                <button>
                    <img src="{{ asset('Images/new2.png') }}" alt="" class="w-7 mx-auto">
                    <h1 class="text-center text-white">Mapa</h1>
                </button>
            </a>

            <a href="">
                <button>
                    <img src="{{ asset('Images/new3.png') }}" alt="" class="w-7 mx-auto">
                    <h1 class="text-center text-white">Calendario</h1>
                </button>
            </a>

            <a href="/cars/create">
                <button>
                    <img src="{{ asset('Images/new5.png') }}" alt="" class="w-7 mx-auto">
                    <h1 class="text-center text-white">Agregar</h1>
                </button>
            </a>

            <a href="/recomendations">
                <button>
                    <img src="{{ asset('Images/new6.png') }}" alt="" class="w-7 mx-auto">
                    <h1 class="text-center text-white">Tips</h1>
                </button>
            </a>
        </div>
    </nav>
</x-layout>
