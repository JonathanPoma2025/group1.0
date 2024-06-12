<x-layout title="editacion">
    <div class="h-screen  flex">
        <div class="py-12 px-20  bg-gray-300 rounded-lg drop-shadow-2xl relative ">
            <img src="{{asset("imagenes/avata.png")}}"  class="object-cover w-40 h-40 rounded-full p-10 ">

            <h1 class="text-2xl font-bold my-4 text-center text-black">Cliente 1</h1>
            <form action=""  class="text-center mt-6">
                <p>nombre</p>
                
                <x-primary-button>Guardar</x-primary-button>
            </form>

            <p class="text-black mt-4">¿No tienes cuenta? <a href="{{route('register')}}" class="underline">Registrate</a></p>
        </div>
    </div>

 </x-layout>
