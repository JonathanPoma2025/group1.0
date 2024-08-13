<x-layoutbg1 title="Agregar vehiculos">
    <div class="scroll-full mb-[172px] md:w-5/6">
        <x-card>

                <h1 class="text-2xl font-bold w-4/5 mb-8 px-14 pl-20 md:pl-52  ">Agregar Vehículo</h1>

            @if (Auth::check())
                <form action="{{ route('cars.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col font-bold justify-center items-center">
                        <select name="brand_id" class="text-black bg-oublack">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                        <x-input type="text" name="model" id="model">Modelo</x-input>
                        <x-input type="number" name="year" id="year" min="1990" max="{{ date('Y') }}">Año</x-input>
                        <select name="car_type_id" class="text-black bg-oublack">
                            @foreach ($car_types as $car_type)
                                <option value="{{ $car_type->id }}">{{ $car_type->name }}</option>
                            @endforeach
                        </select>
                        <x-input type="text" name="placa" id="placa">Placa</x-input>
                        <x-input type="text" name="color" id="color">Color</x-input>
                        <x-input type="text" name="motor" id="motor">Numero de Motor</x-input>
                    </div>
                    <div class="text-center">
                        <x-primary-button type="submit" class="text-white rounded-full p-1 px-4">Agregar</x-primary-button>
                    </div>
                </form>
            @else
                <p class="text-red-500 text-center font-bold">Debes <a href="{{ route('login') }}">iniciar sesión</a> para añadir un vehículo 😮🙁 </p>
            @endif
        </x-card>
        </form>

    @else
        <p class="text-red-500 text-center font-bold ">Debes <href="{{ route('login') }}">iniciar sesión</a> para
            añadir un vehículo 😮🙁 </p>
    @endif

        <x-navigationbarcliente></x-navigationbarcliente>
</x-layoutbg1>
