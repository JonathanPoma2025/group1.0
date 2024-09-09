<x-layoutbg1>

    <swiper-container class="mx-auto w-full h-screen" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
                      loop="true">
        <swiper-slide>
            <div class="bg-card bg-opacity-30 py-8 my-10 text-white px-6 mx-auto rounded-[20px] md:w-2/4 drop-shadow-xl shadow-2xl">
                <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px'">
                <p class="Ubuntu-fold text-center text-1xl">TrackMate</p>
                <article class="align-baseline text-center">
                    <h1 class="text-xl font-bold mt-6">Bienvenido/a</h1>
                    <p class="mt-6">Somos una App cuyo propósito es ayudar con el mantenimiento y gestión automotríz
                        de tu vehículo, contribuyendo al cuidado de el.
                    </p>

                    <x-primary-button class="mb-20 w-40 mx-auto">
                        <a href="{{ route('register') }}">Registrarse</a>
                    </x-primary-button>

                    <p>¿Ya tienes una cuenta?
                        <a href="{{ route('login') }}" class="underline">Inicia sesión</a>
                    </p>
                </article>
            </div>
        </swiper-slide>
        <swiper-slide>Slide 2</swiper-slide>
        <swiper-slide>Slide 3</swiper-slide>
        <swiper-slide>Slide 4</swiper-slide>
        <swiper-slide>Slide 5</swiper-slide>
        <swiper-slide>Slide 6</swiper-slide>
        <swiper-slide>Slide 7</swiper-slide>
        <swiper-slide>Slide 8</swiper-slide>
        <swiper-slide>Slide 9</swiper-slide>
    </swiper-container>
</x-layoutbg1>
