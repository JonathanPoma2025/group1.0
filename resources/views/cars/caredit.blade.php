<x-layoutbg1 title="editar vehiculo">

<x-card>

    <div class="text-center">
       <h1 class="text-2xl font-bold mb-4 text-center">Editar datos del vehiculo</h1>
    </div>

    <form action="cars/create" method="POST">

        <body class="flex flex-col font-bold justify-center items-center h-screen ">

            <x-input type="text" name="brand" id="brand">Marca</x-input>
            <x-input type="text" name="model" id="model">Modelo</x-input>


            <x-input type="number" name="year" id="year" min="1990" max="{{ date('Y') }}">Año</x-input>

            <x-input type="text" name="placa" id="placa">tipo</x-input>

            <x-input type="text" name="placa" id="placa">Placa</x-input>

            <x-input type="text" name="color" id="color">Color</x-input>

            <x-input type="text" name="motor" id="motor">Numero de Motor</x-input>

        </body>


             <div class="text-center">
                <button type="submit" class="bg-gray-300 text-black rounded-full p-1 px-4">Editar</button>
            </div>


    </form>
</x-card>

</x-layoutbg1>
