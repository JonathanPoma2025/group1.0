<x-layout>
    <swiper-container class="mx-auto w-full h-screen px-4 md:px-12" pagination="true" pagination-clickable="true" navigation="true" space-between="30" loop="true">
        <swiper-slide class="flex items-center">
            <div class="bg-card bg-opacity-30 py-8 my-10 text-white px-10 md:px-6 mx-auto rounded-2xl md:w-2/4 drop-shadow-xl shadow-2xl">
                <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px'">
                <p class="font-ubuntu text-center text-xl mt-2">TrackMate</p>
                <article class="align-baseline text-center">
                    <h1 class="text-xl font-bold mt-6">Bienvenido/a</h1>
                    <p class="mt-6">Somos una App cuyo propósito es ayudar con el mantenimiento y gestión automotríz de tu vehículo, contribuyendo al cuidado de el.</p>

                    <x-primary-button class="mt-16 mb-6 w-40 mx-auto">
                        <a href="{{ route('register') }}">Registrarse</a>
                    </x-primary-button>

                    <p>¿Ya tienes una cuenta?
                        <a href="{{ route('login') }}" class="underline">Inicia sesión</a>
                    </p>
                </article>
            </div>
        </swiper-slide>

        <swiper-slide class="flex items-center h-screen">
            <div class="bg-card bg-opacity-30 py-8 my-10 text-white px-6 mx-auto rounded-[20px] md:w-2/4 drop-shadow-xl shadow-2xl">
                <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px'">
                <p class="Ubuntu-fold text-center text-1xl">TrackMate</p>
                <article class="align-baseline text-center">
                    <h1 class="text-xl font-bold mt-6">Cuidado de tu vehículo</h1>
                    <p class="mt-6">Consejos y herramientas para el mantenimiento de tu auto y recomendaciones para mantenerlo en buen estado</p>

                    <x-primary-button class="mt-16 mb-6 w-40 mx-auto">
                        <a href="{{ route('register') }}">Registrarse</a>
                    </x-primary-button>

                    <p>¿Ya tienes una cuenta?
                        <a href="{{ route('login') }}" class="underline">Inicia sesión</a>
                    </p>
                </article>
            </div>
        </swiper-slide>

        <swiper-slide class="flex items-center h-screen">
            <div class="bg-card bg-opacity-30 py-8 my-10 text-white px-6 mx-auto rounded-[20px] md:w-2/4 drop-shadow-xl shadow-2xl">
                <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px'">
                <p class="Ubuntu-fold text-center text-1xl">TrackMate</p>
                <article class="align-baseline text-center">
                    <h1 class="text-xl font-bold mt-6">Bienestar y seguridad</h1>
                    <p class="mt-6">Cuida fácilmente de tu vehículo y mantenlo seguro para evitar problemas</p>

                    <x-primary-button class="mt-16 mb-6 w-40 mx-auto">
                        <a href="{{ route('register') }}">Registrarse</a>
                    </x-primary-button>

                    <p>¿Ya tienes una cuenta?
                        <a href="{{ route('login') }}" class="underline">Inicia sesión</a>
                    </p>
                </article>
            </div>
        </swiper-slide>
    </swiper-container>
</x-layout>
