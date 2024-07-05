<x-layoutbg1 title="editacion">

    <x-card>
        <div class="pl-2 font-bold text-2xl text-white">
            <img class="inline rounded-full w-16 h-16 shadow-lg" src="{{ asset('imagenes/avata.png') }}">
            {{ $user->name}}
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

            <div class="space-x-30 place-content-between">
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

        <p class="mt-6">Marca</p>
        <p class="font-bold pl-2">Hyundal</p>
        <p class="mt-6">Modelo</p>
        <p class="font-bold pl-2">Elantran</p>
        <p class="mt-6">Año</p>
        <p class="font-bold pl-2">2013</p>
        <p class="mt-6">Placa</p>
        <p class="font-bold pl-2">P-2000877</p>
        <p class="mt-6">Color</p>
        <p class="font-bold pl-2">Gris</p>
        <p class="mt-6">Motor</p>
        <p class="font-bold pl-2">1.6 'CRDi' de 136CV</p>

        <a href="/vehicle/edit/number" class="rounded-full bg-blueblack text-white px-4 ">Editar</button>

    </x-card>
</x-layoutbg1>
