<x-layoutbg1 title="editar vehiculo">

<x-card>

    <div class="text-center">
       <h1 class="text-2xl font-bold mb-4 text-center">Editar datos del vehiculo</h1>
    </div>


    @if (@session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{session('success')}}
    </div>

    @endif

    @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('cars.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')


        <body class="flex flex-col font-bold justify-center items-center h-screen ">

            <x-input type="text" name="brand" id="brand" value="{{$vehicle->brand->name}}">Marca</x-input>

            <x-input type="text" name="model" id="model" value="{{$vehicle->model}}">Modelo</x-input>


            <x-input type="number" name="year" id="year" min="1990" max="{{ date('Y') }}" value="{{$vehicle->year}}">Año</x-input>

            <x-input type="text" name="tipo" id="tipo" value="{{$vehicle->Cartype->name}}">tipo</x-input>

            <x-input type="text" name="placa" id="placa" value="{{$vehicle->placa}}">Placa</x-input>

            <x-input type="text" name="color" id="color" value="{{$vehicle->color}}">Color</x-input>

            <x-input type="text" name="motor" id="motor" value="{{$vehicle->motor}}">Numero de Motor</x-input>

        </body>


             <div class="text-center">
                <button type="submit" class="bg-gray-300 text-black rounded-full p-1 px-4">Editar</button>
            </div>


    </form>
</x-card>

</x-layoutbg1>
