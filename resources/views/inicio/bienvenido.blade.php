<x-layoutbg1>
    <swiper-container class="w-100 h-100" space-between="50" history-key="slide" pagination="true" navigation="true">
        <swiper-slide>
            <x-card class="scroll-full h-full">
                <img src="{{ asset('Images/Logo 2.png') }}" alt="" class="w-20 mx-auto md:'12px'">
                <p class="Ubuntu-fold text-center text-1xl ">TrackMate</p>
                <article class="align-baseline text-center">
                    <h1 class="text-xl font-bold mt-6">Bienvenido/a</h1>
                    <p class="mt-6">Somos una App cuyo proposito es ayudar con el mantenimiento y gestion automotriz
                        de tu vehiculo,
                        contribuyendo al cuidado de el.
                    </p>
                </article>
                <div class="w-6">
                    <img src="{{ asset('Images/circle 1.png') }}" alt="" class="text-left">
                    <img src="{{ asset('Images/circle.png') }}" alt="">
                </div>
                <x-primary-button>registrarse</x-primary-button>

            </x-card>
        </swiper-slide>
        <swiper-slide data-history="Slide 2">Slide 2</swiper-slide>
        <swiper-slide data-history="3">Slide 3</swiper-slide>
    </swiper-container>
</x-layoutbg1>
