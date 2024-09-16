<x-layout>
    <div class="scroll-full mb-[172px] md:w-5/6">
        <x-card>
            <h1 class="text-xl font-bold mb-8 text-center">Agregar vehículo</h1>

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
        </x-card>
    </div>

    <x-navigationbarcliente/>
</x-layout>
