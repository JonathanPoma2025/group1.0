<x-layout title="Agregar vehiculos">
 
<div class="bg-gray-200 p-8 rounded-lg shadow-lg md:w-2/4 mb-4">
    
    <div class="text-center">
       <h1 class="text-2xl font-bold mb-4 text-center">Agregar Vehiculo</h1>
    </div>
   
    <form action="cars/create" method="POST"> 
        @csrf
        <body class="flex flex-col font-bold justify-center items-center h-screen ">
            
          
            <select name="select">
                @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">
                        {{$brand->name}}
                    </option>
                @endforeach
            </select>

            

            <x-input type="text" name="brand" id="brand">Modelo</x-input>
            <x-input type="date" name="brand" id="brand">Año</x-input>


            <select name="select">
                @foreach($car_types as $car_type)

                <option value="{{$car_type->id}}">
                    {{$car_type->name}}
                </option>
                @endforeach
            </select>


            <x-input type="text" name="brand" id="brand">Placa</x-input>
            <x-input type="text" name="brand" id="brand">Color</x-input>
            <x-input type="text" name="brand" id="brand">NRO.o Motor</x-input>
           
        </body>
            
        
             <div class="text-center">
                <button type="submit" class="bg-gray-300 text-black rounded-full p-1 px-4">agregar</button>
            </div>
            
        
    </form>
</div>
    
</x-layout>