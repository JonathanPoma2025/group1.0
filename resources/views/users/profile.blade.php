<x-layoutbg1 title="editacion" class="my-20">

    <x-card>
        <div class="pl-2 font-bold text-2xl text-white">
            <img class="inline rounded-full w-16 h-16 shadow-lg" src="{{ asset('imagenes/avata.png') }}">
            Cliente 1
        </div>

        <div class=" mt-10 text-left text-white">

            <p class="mt-4">Contacto</p>
            <div class="pl-2 font-bold">
                <img class="inline w-5" src="{{ asset('imagenes/mail_24dp_FILL0_wght400_GRAD0_opsz24 (1).png') }}">
                {{ $user->email}}
            </div>

            <div class="pl-2 font-bold">
                <img class="inline w-5" src="{{ asset('imagenes/call_24dp_FILL0_wght400_GRAD0_opsz24.png') }}">
                {{ $user->cellphone_number }}
            </div>

            <div class="pl-2 font-bold">
                <img class="inline w-5" src="{{ asset('imagenes/call_24dp_FILL0_wght400_GRAD0_opsz24.png') }}">
                {{ $user->birthday }}
            </div>

            <div class="space-x-30 space-x-5 md:space-x-5 text-end">
                <button class="rounded-full bg-blueblack text-white px-4 mt-20 ">Cerrar Sesión <a
                        href="update"></a></button>

                <a href="/vehicle/edit/number"  class="rounded-full bg-blueblack text-white px-4">Editar</a>

            </div>
        </div>
    </x-card>

    <x-card>
        <div class="text-center font-bold text-2xl">
            Vehículo
        </div>

        <p class="mt-6">Vehiculo</p>

        <div class="pl-2 font-bold">
            <img class="inline w-5"
            src="{{ asset('imagenes/directions_car_24dp_FILL0_wght400_GRAD0_opsz24.png') }}">
            Auto sedan
        </div>

        <div class=" mt-10 text-start">
            <p class="mt-6">Marca</p>
            <p class="font-bold pl-2">{{$vehicle->brand_id}}</p>
            <p class="mt-6">Modelo</p>
            <p class="font-bold pl-2">{{$vehicle->model}}</p>
            <p class="mt-6">Año</p>
            <p class="font-bold pl-2">{{$vehicle->year}}</p>
            <p class="mt-6">Placa</p>
            <p class="font-bold pl-2">{{$vehicle->placa}}</p>
            <p class="mt-6">Color</p>
            <p class="font-bold pl-2">{{$vehicle->color}}</p>
            <p class="mt-6">Motor</p>
            <p class="font-bold pl-2">1.6 'CRDi' de 136CV</p>
        </div>

        <div class=" text-end md:text-end space-x-30 space-x-5 md:space-x-5">

            <a href="/vehicle/edit/number" class="rounded-full bg-blueblack text-white px-4 ">Editar</button>

            </div>
        </div>
    </x-card>
</x-layoutbg1>
