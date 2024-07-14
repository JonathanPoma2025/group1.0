<x-layoutbg1 title="update">


    <div class="h-screen flex flex-col items-center scroll-full">
        <div
            class="py-12 px-20 bg-ourblack bg-opacity-30  drop-shadow-2xl rounded-[24px] pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl w-5/6 my-20 md:mx-16">
            <img src="{{ asset('imagenes/avata.png') }}" class="mx-auto w-24 rounded-full h-24">
            <h1 class="text-2xl font-bold my-4 text-center text-white">Actualiza tus datos aqui</h1>
            <form action="/update" method="GET" class="text-center mt-6">
                @csrf
                <x-input id="name" name="name" type="text">Nombre</x-input>
                <x-input id="email" name="email" type="email">Email</x-input>
                <x-input id="cellphone" name="cellphone" type="text">Numero de telefono</x-input>
                <x-primary-button>Guardar</x-primary-button>
            </form>


        </div>
        <div class=" bg-ourblack bg-opacity-30  drop-shadow-2xl rounded-[24px] pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl w-5/6">
            <h1 class="text-2xl font-bold my-4 text-center text-white">Actualiza los datos de tu carro aqui</h1>
            <form action="/update" method="GET" class="text-center mt-6">
                @csrf
                <x-input id="name" name="name" type="text">Vehiculo</x-input>
                <x-input id="name" name="name" type="text">Marca</x-input>
                <x-input id="name" name="name" type="text">Modelo</x-input>
                <x-input id="name" name="name" type="text">Año</x-input>
                <x-input id="name" name="name" type="text">Placa</x-input>
                <x-input id="name" name="name" type="text">Color</x-input>
                <x-input id="name" name="name" type="text">Motor</x-input>
                <x-primary-button>Guardar</x-primary-button>


            </form>

        </div>
    </div>


</x-layoutbg1>

