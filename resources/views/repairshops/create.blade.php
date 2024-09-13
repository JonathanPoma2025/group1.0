<x-layout>
    <div class="flex flex-col items-center h-full scroll-full md:w-4/5">
        <x-card>
            <img src="{{ asset('images/logo 2.png') }}" alt="" class="mx-auto w-32">
            <form action="/repairshops/store" method="POST" class="text-center mt-6">
                @csrf
                <h1 class="text-lg text-gray-5 py-2 mb-4 text-center">
                    Registra tu taller en
                    <p class="font-ubuntu text-2xl font-bold">
                        TrackMate
                    </p>
                </h1>

                <div class="mb-4 px-9 items-center ">
                    <x-input type="string" id="Nombre del taller" name="name">Nombre del taller</x-input>

                    <x-input type="string" id="Ubicacion" name="address">Ubicación</x-input>

                    <x-input type="email" id="email" name="email">Dirección de correo electrónico</x-input>

                    <x-input type="string" id="Telefono" name="cellphone_number">Número de teléfono</x-input>
                </div>

                <x-primary-button class="items-center">Registrar taller</x-primary-button>
            </form>
        </x-card>
    </div>
</x-layout>
