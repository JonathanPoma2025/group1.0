<x-layout>
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

            <div class="flex flex-col font-bold justify-center items-center">
                <select name="brand_id" class="text-black bg-oublack">
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $brand->id == $vehicle->brand_id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>

                <x-input type="text" name="model" id="model" value="{{ $vehicle->model }}">Modelo</x-input>
                <x-input type="number" name="year" id="year" min="1990" max="{{ date('Y') }}" value="{{ $vehicle->year }}">Año</x-input>

                <select name="car_type_id" class="text-black bg-oublack">
                    @foreach ($car_types as $car_type)
                        <option value="{{ $car_type->id }}" {{ $car_type->id == $vehicle->car_type_id ? 'selected' : '' }}>
                            {{ $car_type->name }}
                        </option>
                    @endforeach
                </select>

                <x-input type="text" name="placa" id="placa" value="{{ $vehicle->placa }}">Placa</x-input>
                <x-input type="text" name="color" id="color" value="{{ $vehicle->color }}">Color</x-input>
                <x-input type="text" name="motor" id="motor" value="{{ $vehicle->motor }}">Número de Motor</x-input>
            </div>

             <div class="text-center">
                 <x-primary-button>Editar</x-primary-button>
            </div>
        </form>
    </x-card>

    <x-navigationbarcliente/>
</x-layout>
