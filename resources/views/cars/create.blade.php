<x-layoutbg1 title="Agregar vehiculos">



        <div>

           <div class="text-center ">
              <h1 class="text-2xl font-bold mb-4 my-16  text-center ">Agregar Vehículo</h1>
           </div>


           @if (Auth::check())
    <form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <div class="flex flex-col font-bold justify-center items-center h-screen">
        <select name="brand_id">
            @foreach ($brands as $brand)
                <option  value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>

        <x-input type="text" name="model" id="model">Modelo</x-input>

        <x-input type="number" name="year" id="year" min="1990" max="{{ date('Y') }}">Año</x-input>

        <select name="car_type_id">

            @foreach($car_types as $car_type)
                <option value="{{ $car_type->id }}">{{ $car_type->name }}</option>
            @endforeach
        </select>

        <x-input type="text" name="placa" id="placa">Placa</x-input>

        <x-input type="text" name="color" id="color">Color</x-input>

        <x-input type="text" name="motor" id="motor">Numero de Motor</x-input>
    </div>

    <div class="text-center">
        <button type="submit" class="bg-gray-300 text-black rounded-full p-1 px-4">Agregar</button>
    </div>
    </form>


    @else
  <p class="text-red-500 text-center font-bold ">Debes <href="{{route('login')}}">iniciar sesión</a> para añadir un vehículo 😮🙁 </p>
    @endif

    <x-navigationbarcliente></x-navigationbarcliente>


</x-layoutbg1>
