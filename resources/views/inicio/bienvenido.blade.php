<x-layoutbg1>

    <swiper-slide class="flex">
        <x-card class="scroll-full h-full">
            <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px'">
            <p class="Ubuntu-fold text-center text-1xl ">TrackMate</p>
            <article class="align-baseline text-center">
                <h1 class="text-xl font-bold mt-6">Bienvenido/a</h1>
                <p class="mt-6">Somos una App cuyo proposito es ayudar con el mantenimiento y gestion automotriz
                    de tu
                    vehiculo,
                    contribuyendo al cuidado de el.
                </p>

                <div class="flex justify-center mt-8 items-center">
                    <img src="{{ asset('Images/circle.png') }}" alt="" class="w-4 ml-5">
                    <img src="{{ asset('Images/circle.png') }}" alt="" class="w-4 ml-5">
                    <img src="{{ asset('Images/circle.png') }}" alt="" class="w-4 ml-5">
                    <img src="{{ asset('Images/circle 1.png') }}" alt="" class="w-8 ml-8">
                </div>

                <x-primary-button class="mb-20 w-40 mx-auto"><a
                        href="{{ route('register') }}">registrarse</a></x-primary-button>

                <h1>¿ya tienes una cuenta? <a href="{{ route('login') }}" class="underline">inicia sesión</a> </h1>
            </article>
        </x-card>
        <swiper-slide>

</x-layoutbg1>
