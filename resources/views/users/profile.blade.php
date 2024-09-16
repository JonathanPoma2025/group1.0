<x-layout>
    <div class="w-full mt-8 mb-24">
        <x-card>
            <div class="pl-2 font-bold text-2xl text-white">
                <span>¡Hola!</span>
                <span class="font-ubuntu">{{ $user->name }}</span>
            </div>

            <div class="mt-10 text-left text-white">
                <p class="mt-4">Datos personales</p>
                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset('icons/mail.png') }}">
                    {{ $user->email }}
                </div>

                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset('icons/phone.png') }}">
                    {{ $user->cellphone_number }}
                </div>

                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset('icons/calendario.png') }}">
                    {{ $user->birthday }}
                </div>

                <p class="mt-4">Pin secreto</p>
                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset('icons/mail.png') }}">
                    {{ $user->pin  }}
                </div>

                <div class="space-x-30 space-x-5 md:space-x-5 text-end">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <x-primary-button class="rounded-full text-white px-4 mt-20 ">Cerrar Sesión</x-primary-button>
                    </form>
                </div>
            </div>
        </x-card>
    </div>


    @foreach ($user->cars as $car)
        <div class="my-2 w-full">
            <x-card>
                <div class="text-center font-bold text-xl">
                    <img class="inline w-5" src="{{ asset('imagenes/car.png') }}">
                    Vehículo {{ $car->carType->name }}
                </div>

                <div class="my-2 text-start grid grid-cols-2">
                    <div>
                        <p class="mt-6">Marca</p>
                        <p class="font-bold pl-2">{{ $car->brand->name }}</p>
                        <p class="mt-6">Modelo</p>
                        <p class="font-bold pl-2">{{ $car->model }}</p>
                        <p class="mt-6">Año</p>
                        <p class="font-bold pl-2">{{ $car->year }}</p>
                    </div>
                    <div>
                        <p class="mt-6">Placa</p>
                        <p class="font-bold pl-2">{{ $car->placa }}</p>
                        <p class="mt-6">Color</p>
                        <p class="font-bold pl-2">{{ $car->color }}</p>
                        <p class="mt-6">Motor</p>
                        <p class="font-bold pl-2">{{ $car->motor }}</p>
                    </div>
                </div>

                <div class="text-end mt-5 space-x-1">
                    <a href="{{ route('cars.caredit', $car->id) }}" class="rounded-full bg-blueblack text-white px-5 py-1.5">Editar</a>
                    <a href="{{ route('cars.record', $car->id) }}" class="rounded-full bg-blueblack text-white px-5 py-1.5">Mantenimiento</a>
                </div>
            </x-card>
        </div>
    @endforeach

    @if($user->is_mechanic)
        <x-navigationbartaller/>
    @else
        <x-navigationbarcliente/>
    @endif
</x-layout>
