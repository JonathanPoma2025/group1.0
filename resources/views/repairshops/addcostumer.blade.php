<x-layoutbg1 title="addcostumer">
    <div class="flex flex-col items-center scroll-full mb-[172px]">
        <div class="py-12 px-20 bg-ourblack bg-opacity-30 drop-shadow-2xl rounded-[24px] pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl m-42 my-40 md:mx-16">
            <h1 class="text-2xl font-bold my-4 text-center text-white mb-10">Agregar Clientes</h1>
            <form action="{{ route('clients.store') }}" method="POST" class="text-center mt-6">
                @csrf
                <div class="mb-4">
                <x-input id="name" name="name" type="text" placeholder="Nombre"/>
                </div>

                <div class="mb-4">
                <x-input id="email" name="email" type="email" placeholder="Correo"/>
                </div>

                <div class="mb-4">
                <x-input id="vehicle" name="vehicle" type="text" placeholder="Vehículo"/>
                </div>

                <div class="mb-4">
                <x-input id="last_maintenance" name="last_maintenance" type="date" placeholder="Último Mantenimiento"/>
                </div>

                <x-primary-button class="text-white">Agregar</x-primary-button>
            </form>
        </div>
        <x-navigationbartaller/>
    </div>
</x-layoutbg1>



