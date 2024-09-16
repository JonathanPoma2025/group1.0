<x-layout>
    <div class="relative overflow-hidden w-full">

        <div class="bg-ourblack bg-opacity-20 backdrop-blur rounded-full h-[175%] w-[200%] absolute bottom-[60%] -left-[50%] z-0 flex justify-center items-end md:*:">
            <article class="text-nowrap flex flex-col justify-center">
                <h2 class="text-white text-1xl">Tu próximo mantenimiento es en:</h2>
                <p class="text-white  text-3xl font-bold text-center">2 meses</p>
                <x-primary-button class="mb-20 w-40 mx-auto">Editar datos</x-primary-button>
            </article>
        </div>

        <div class="flex justify-center h-screen shadow-3xl z-40">
            <div class="grid items-center justify-center text-xs">
                <div class="rounded-2xl px-8 py-6 mt-24 shadow-2xl w-72 bg-ourblack bg-opacity-30 text-white">
                    <p class="text-xl font-bold mb-2">Datos de contacto</p>
                    <hr class="my-4">
                    <p class="mt-2">Correo electrónico</p>
                    <p class="font-bold pl-2 ">{{ $client->email }}</p>
                    <p class="mt-2">Contacto</p>
                    <p class="font-bold pl-2">{{ $client->cellphone_number }}</p>
                    <p class="text-xl font-bold my-4">Autos registrados</p>

                    @foreach($client->cars as $car)
                        <hr class="my-4">
                        <p class="font-bold">{{ $car->model . " " . $car->color . " " . $car->year }}</p>
                        <p class="mt-2">Placa</p>
                        <p class="font-bold pl-2">{{ $car->placa }}</p>
                        <div class="text-end md:text-end space-x-30 space-x-5 md:space-x-5">
                            <a href="{{ route('cars.caredit', $car->id) }}" class="rounded-full bg-blueblack text-white px-4">Mantenimientos</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <x-navigationbarcliente/>
    </div>
</x-layout>
