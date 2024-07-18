<x-layoutbg1>
    <div class="flex flex-col justify-center items-center h-screen w-full my-5 ">

        <x-card>
            <img src="{{ asset('images/logocar.png') }}" alt="" class="mx-auto w-32">
            <form action="/create" method="GET">

                <h1 class="text-xl text-gray-5 py-2 font-bold mb-4 text-center">Registra tu taller</h1>

                <div class="mb-4 px-9 flex flex-col items-center ">
                    <x-input type="string" id="Nombre del taller" name="Nombre del taller">Nombre del taller</x-input>

                    <x-input type="string" id="Propietario" name="Propietario">Propietario</x-input>

                    <x-input type="string" id="Ubicacion" name="Ubicacion">Ubicación</x-input>

                    <x-input type="email" id="email" name="Correo">Dirección de correo electrónico</x-input>

                    <x-input type="string" id="Telefono" name="Telefono">Numero de telefono</x-input>

                </div>
                <x-primary-button class="items-center">Registrar taller</x-primary-button>
            </form>
        </x-card>

    </div>
    <x-navigationbartaller></x-navigationbartaller>
</x-layoutbg1>
