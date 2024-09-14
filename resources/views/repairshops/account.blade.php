<x-layout>
    <div class="flex flex-col justify-center items-center w-full pt-2 my-14 mb-40">
        <x-card>
            <img src="{{ asset("images/logocar.png")}}" class="mx-auto my-4 w-16">
            <div class="pl-2 font-bold text-2xl text-white">
                <p class="font-medium text-center">{{$mecanico->repairshop->name}}</p>
            </div>

            <div class="mt-6 text-left text-white">
                <p>Contacto</p>

                <div class="pl-2">
                    <img class="inline w-5 font-bold" src="{{ asset('imagenes/mail.png') }}">
                    <span class="font-bold">Correo electrónico</span>
                    <p class="pl-10">{{ $mecanico->repairshop->email }}</p>
                </div>
                <div class="pl-2">
                    <img class="inline w-5" src="{{ asset('imagenes/phone.png') }}">
                    <span class="font-bold">Número de teléfono</span>
                    <p class="pl-10">{{ $mecanico->repairshop->cellphone_number }}</p>
                </div>
                <div class="pl-2">
                    <img class="inline w-5" src="{{asset('/imagenes/location.svg')}}">
                    <span class="font-bold">Ubicación</span>
                    <p class="pl-10">{{ $mecanico->repairshop->address }}</p>
                </div>
                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{asset('calendario8.png')}}">
                    Horario de atención
                </div>
                <div class="pl-10">
                    <p>Lunes a viernes</p>
                    <p>8:00 AM a 5:00 PM</p>
                </div>

                <div class="space-x-4 flex justify-end md:text-end">
                    <x-primary-button>Editar</x-primary-button>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <x-primary-button>Cerrar sesión</x-primary-button>
                    </form>
                </div>
            </div>
        </x-card>
    </div>

    <x-navigationbartaller/>
</x-layout>
