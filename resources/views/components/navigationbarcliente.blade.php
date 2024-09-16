<x-layout>
    <nav class="bg-ourblack bg-opacity-60 backdrop-blur p-5 w-11/12 md:w-5/12 shadow-lg rounded-full fixed bottom-10 left-1/2 transform -translate-x-1/2">
        <div class="flex justify-around">

            <a href="{{ route('clients.home') }}">
                <button>
                    <img src="{{ asset('icons/home.png') }}" class="w-6 mx-auto">
                    <h1 class="text-center text-white">Inicio</h1>
                </button>
            </a>

            <a href="{{ route('users.profile') }}">
                <button>
                    <img src="{{ asset('icons/profile.svg') }}" class="w-6 mx-auto md:'12px'">
                    <h1 class="text-center text-white">Registros</h1>
                </button>
            </a>

            <a href="{{ route('cars.create') }}">
                <button>
                    <img src="{{ asset('icons/car.png') }}" class="w-6 mx-auto">
                    <h1 class="text-center text-white">Agregar</h1>
                </button>
            </a>

            <a href="{{ route('recommendations') }}">
                <button>
                    <img src="{{ asset('icons/tips.png') }}" class="w-6 mx-auto">
                    <h1 class="text-center text-white">Tips</h1>
                </button>
            </a>
        </div>
    </nav>
</x-layout>
