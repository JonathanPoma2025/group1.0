<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackMate</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/Images/Logo 2.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
    <body class="bg-gray-100 flex flex-col justify-center items-center bg-center bg-cover bg-no-repeat font-inter"
     style="background-image: url('{{ asset("Images/fondodefault.jpg") }}');">

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </body>
</html>


<x-layout>
    <nav class="bg-ourblack bg-opacity-60 backdrop-blur p-5 w-11/12 md:w-5/12 shadow-lg fixed bottom-10 left-1/2 transform -translate-x-1/2">
        <div class="flex justify-around">

            <a href="{{ route('clients.home') }}">
                <button>
                    <img src="{{ asset('icons/homee.png') }}" class="w-6 mx-auto">
                    <h1 class="text-center text-white">Inicio</h1>
                </button>
            </a>

            <a href="{{ route('users.profile') }}">
                <button>
                    <img src="{{ asset('icons/history.png') }}" class="w-6 mx-auto md:'12px'">
                    <h1 class="text-center text-white">Historial</h1>
                </button>
            </a>

            <a href="{{ route('cars.create') }}">
                <button>
                    <img src="{{ asset('icons/location.png') }}" class="w-6 mx-auto">
                    <h1 class="text-center text-white">Agregar</h1>
                </button>
            </a>

            <a href="{{ route('recommendations') }}">
                <button>
                    <img src="{{ asset('icons/person.png') }}" class="w-6 mx-auto">
                    <h1 class="text-center text-white">Perfil</h1>
                </button>
            </a>
        </div>
    </nav>
</x-layout>
