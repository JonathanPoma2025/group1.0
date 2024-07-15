<x-layoutbg1 title="Login">

    <div class="h-screen w-full flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold my-4 text-center text-white">Agregar Mantenimiento</h1>

        <x-card class="h-screen flex items-center">

            <form action="/login" method="GET" class="text-center">
                @csrf
                <x-input id="date" name="date" type="date">Fecha</x-input>
                <x-input id="time" name="time" type="time">Hora</x-input>
                <x-input id="text" name="text" type="text">Descripción</x-input>
                
                <x-primary-button>Agregar</x-primary-button>
            </form>

        </x-card>
    </div>

</x-layoutbg1>
