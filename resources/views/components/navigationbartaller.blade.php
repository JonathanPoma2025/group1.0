<nav class="bg-ourblack bg-opacity-60 backdrop-blur-sm px-4 py-5 w-11/12 md:w-7/12 shadow-lg flex justify-around
    rounded-full fixed bottom-5 left-1/2 transform -translate-x-1/2">

            <a href="{{ route('repairshops.home') }}">
                <button>
                    <img src="{{ asset('Images/new1.png') }}" class="w-6 mx-auto md:'12px'">
                    <h1 class="text-center text-white">Inicio</h1>
                </button>
            </a>

            <a href="">
                <button>
                    <img src="{{ asset('Images/new2.png') }}" class="w-6 mx-auto md:'12px'">
                    <h1 class="text-center text-white">Mapa</h1>
                </button>
            </a>

            <a href="">
                <button>
                    <img src="{{ asset('Images/new3.png') }}" class="w-6 mx-auto md:'12px'">
                    <h1 class="text-center text-white">Calendario</h1>
                </button>
            </a>

            <a href="{{ route('clients.index') }}">
                <button>
                    <img src="{{ asset('Images/new4.png') }}" class="w-6 mx-auto md:'12px'">
                    <h1 class="text-center text-white">Clientes</h1>
                </button>
            </a>
</nav>
