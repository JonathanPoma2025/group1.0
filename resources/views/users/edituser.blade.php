<x-layout title="editacion">
    <div class="h-screen flex items-center">
        <div class="py-12 px-20 bg-gray-300 rounded-lg drop-shadow-2xl ">
            <img src="{{asset("imagenes/avata.png")}}" alt=""  class="w-40 h-40 rounded-full ">
            <h1 class="text-2xl font-bold my-4 text-center text-black">Cliente 1</h1>
            <form action="/edit" method="POST" class=" mt-6 text-left">
                <p class="mt-4">Nombre</p>
                <p class="font-bold pl-2">Sofia Medina</p>
                <p class="mt-4">Contacto</p>
                <p class="font-bold pl-2">sofia@example.com</p>
                <p class="font-bold pl-2">+503 7477 8037</p>
                <p class="mt-6">Vehiculo</p>
                <p class="font-bold pl-2">Auto sedan</p>
                <p class="mt-6">Marca</p>
                <p class="font-bold pl-2">Hyundal</p>
                <p class="mt-6">Modelo</p>
                <p class="font-bold pl-2">Elantran</p>
                <p class="mt-6">Año</p>
                <p class="font-bold pl-2">2013</p>
                <p class="mt-6">Placa</p>
                <p class="font-bold pl-2">P-2000877</p>
                <p class="mt-6">Color</p>
                <p class="font-bold pl-2">Gris</p>
                <p class="mt-6">Motor</p>
                <p class="font-bold pl-2">1.6 'CRDi' de 136CV</p>

               <x-primary-button >Cerrar Sesión</x-primary-button>
               <x-primary-button >Editar</x-primary-button>
            </form>

        </div>
    </div>

 </x-layout>
