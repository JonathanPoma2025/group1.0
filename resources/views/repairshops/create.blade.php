


<x-layout>

    <div class="bg-gray-100 flex flex-col justify-center items-center h-screen">
        <div class="bg-gray-200 p-8 rounded-lg shadow-lg md:w-2/4 mb-4 ">

            <img src="{{ asset("imagenes/caricon.png")}}" alt="" class="">

            <h1 class="text-2xl font-bold mb-4 text-center">Registra tu taller</h1>

            <x-input type="" id="" name="" >Nombre del taller</x-input>

            <x-input type="" id="" name="" >Propietario</x-input>

            <x-input type="" id="" name="" >Dirección</x-input>

            <x-input type="email" id="email" name="correo" >Dirección de correo electrónico</x-input>

            <x-input type="password" id="" name="contraseña" > Contraseña </x-input>

            <button class="bg-gray-300 text-black rounded-full p-1 px-4" type="submit">Registrarse</button>
        </div>

            <div class="bg-gray-200 p-4 rounded-lg shadow-md custom-width w-2/4 text-center text-gray-600">
                <p>¿Ya tienes una cuenta?</p>
                <button class="bg-gray-300 text-black rounded-full p-1 px-4">Iniciar sesión</button>
            </div>

    </div>

</x-layout>
