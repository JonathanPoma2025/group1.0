<x-layout>
    <div class="h-screen w-full flex flex-col items-center justify-center scroll-full mb-[172px]">
        <h1 class="text-2xl font-bold my-4 text-center text-white">Agregar mantenimiento</h1>

        <x-card class="h-screen flex items-center">
            <form action="" method="post" class="text-center">
                @csrf
                <x-input id="date" name="date" type="date">Fecha</x-input>
                <x-input id="time" name="time_span" type="number">Duración en días</x-input>
                <x-input id="text" name="upcoming_date" type="date">Próximo mantenimiento</x-input>

                <select name="vehicle_id" class="text-black bg-oublack">
                    foreach ($clients->cars as $car)
                        <option value="$car->id ">$car </option>
                    endforeach
                </select>
                <x-primary-button>Agregar</x-primary-button>
            </form>

        </x-card>
    </div>

    @if(Auth::user()->is_mechanic)
        <x-navigationbartaller/>
    @else
        <x-navigationbarcliente/>
    @endif
</x-layout>
