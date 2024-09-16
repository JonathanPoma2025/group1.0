<x-layout>
    <div class="flex flex-col items-center scroll-full mt-8 mb-24">
        <h1 class="text-2xl text-gray-5 font-bold my-6 text-center">Clientes</h1>

        @if($customers->repairshop == null)
            <div class="flex flex-col items-center">
                <p class="text-gray-5 text-center">No has registrado tu taller todavía</p>
            </div>
        @else
            <a href="{{ route('clients.create') }}" class="mb-8">
                <x-primary-button>Agregar un nuevo cliente</x-primary-button>
            </a>

            @foreach($customers->repairshop->clients as $cliente)
                <div class="flex flex-col items-center">
                    <div class="rounded-2xl px-6 py-6 mb-6 shadow-2xl w-72 bg-ourblack bg-opacity-30 text-white">
                        <p class="">{{ $cliente->name }}</p>
                        <p class="font-bold pl-2">{{ $cliente->email }}</p>
                        @foreach($cliente->cars as $car)
                            <hr class="my-2">
                            <a href="{{ route('clients.details', [$cliente->id, $car->id]) }}">
                                <p class="mt-2">Vehículo</p>
                                <p class="font-bold pl-2">{{ $car->model . ' ' . $car->year}}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <x-navigationbartaller/>
</x-layout>
