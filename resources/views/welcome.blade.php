<x-layoutbg1>
    <swiper-container class="h-100 w-100"  space-between="50" history-key="slide" pagination="true" navigation="true">
        <swiper-slide class="flex">
        <x-card class="scroll-full h-full">
            <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px'">
            <p class="Ubuntu-fold text-center text-1xl ">TrackMate</p>
            <article class="align-baseline text-center">
                <h1 class="text-xl font-bold mt-6">Bienvenido/a</h1>
                <p class="mt-6">Somos una App cuyo proposito es ayudar con el mantenimiento y gestion automotriz de tu
                    vehiculo,
                    contribuyendo al cuidado de el.
                </p>

                <div class="flex justify-center mt-8 items-center">
                    <img src="{{ asset('Images/circle 1.png') }}" alt="" class="w-5 invisible">
                    <img src="{{ asset('Images/circle.png') }}" alt="" class="w-5">
                    <img src="{{ asset('Images/circle.png') }}" alt="" class="w-5">
                    <img src="{{ asset('Images/circle.png') }}" alt="" class="w-5">
                    <img src="{{ asset('Images/circle 1.png') }}" alt="" class="w-5">
                </div>

                <x-primary-button class="mb-20 w-40 mx-auto">registrarse</x-primary-button>

                <h1>¿ya tienes una cuenta?</h1>
                <x-primary-button>inicia sesion</x-primary-button>

        </x-card>
        <swiper-slide>
            <div
                class="bg-card bg-opacity-30 py-8 my-10 text-white text-center px-6 w-4/5 mx-auto rounded-[20px] md:w-2/4 drop-shadow-2xl shadow-2xl">

                <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px '">
                <p class="Ubuntu-bold 2xl">TrackMate</p>
                <article class="align-baseline">
                    <h1 class="text-xl font-bold mt-6">Cuidado de tu vehiculo</h1>
                    <p class="mt-6">consejos y herramientas para el mantenimientode tu auto y recomendaciones para
                        mantenerlo
                        en buen estado
                    </p>
                    <x-primary-button class="mb-20 w-40 mx-auto">registrarse</x-primary-button>

                    <h1>¿ya tienes una cuenta?</h1>
                    <x-primary-button>inicia sesion</x-primary-button>

                </article>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div
                class="bg-card bg-opacity-30 py-8 my-10 text-white text-center px-6 w-4/5 mx-auto rounded-[20px] md:w-2/4 drop-shadow-2xl shadow-2xl">

                <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px '">
                <p class="Ubuntu-bold 2xl">TrackMate</p>
                <article class="align-baseline">
                    <h1 class="text-xl font-bold mt-6">Bienestar y seguridad</h1>
                    <p class="mt-6">Cuida facilmente de tu vehiculo y mantenlo seguro para evitar problemas
                    </p>
                    <x-primary-button class="mb-20 w-40 mx-auto">registrarse</x-primary-button>

                    <h1>¿ya tienes una cuenta?</h1>
                    <x-primary-button>inicia sesion</x-primary-button>

                </article>
            </div>
        </swiper-slide>

    </swiper-container>
</x-layoutbg1>
