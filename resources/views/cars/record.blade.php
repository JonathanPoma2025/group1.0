<x-layout>
    <div class="flex justify-center shadow-3xl my-20">
        <div class="grid items-center justify-center text-xs">
            <div class="rounded-2xl px-8 py-6 shadow-2xl w-72 bg-ourblack bg-opacity-30 text-white">
                <p class="text-xl font-bold mb-2">Vehículo registrado</p>
                <p class="mt-2">Auto<span> {{ $vehicle->model . " " . $vehicle->color . " " . $vehicle->year}} </span></p>
                <p class="font-bold pl-2"> {{ $vehicle->placa }} </p>
                <p class="text-xl font-bold my-4">Historial de mantenimientos</p>

                @foreach( $vehicle->maintenances as $maintenance)
                    <hr class="my-4">
                    <p class="mt-2">Fecha</p>
                    <p class="font-bold pl-2">{{ $maintenance->created_at }}</p>
                    <p class="mt-2">Duración del mantenimiento</p>
                    <p class="font-bold pl-2">{{ $maintenance->time_span }} días</p>
                    <p class="mt-2">Próximo</p>
                    <p class="font-bold pl-2">{{ $maintenance->upcoming_date }}</p>
                    <p class="mt-2">Detalles del servicio</p>

                    @foreach( $maintenance->details as $service)
                        <ul>
                            <li class="pl-3 font-bold">{{ $service->title }}
                                <p class="pl-3 font-medium">{{ $service->detail }}</p>
                            </li>
                        </ul>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>

        <x-navigationbarcliente/>

</x-layout>
