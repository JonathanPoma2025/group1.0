
<x-layoutbg>
    <div class="flex flex-col justify-center items-center h-screen w-full">
        <div class="bg-gray-200 bg-opacity-80 p-8 rounded-[20px] md:w-2/4 shadow-2xl mb-4">
            <img src="{{ asset("imagenes/caricon.png")}}" alt="" class="mx-auto w-24">

            <h1 class="text-xl py-2 font-bold mb-4 text-center">Registra tu taller</h1>

            <x-input type="" id="" name="">Nombre del taller</x-input>

            <x-input type="" id="" name="">Propietario</x-input>

            <x-input type="" id="" name="">Dirección</x-input>

            <x-input type="email" id="email" name="correo">Dirección de correo electrónico</x-input>

            <x-input type="password" id="" name="contraseña">Contraseña</x-input>

            <button class="mx-auto bg-gray-300 text-black rounded-full p-1 px-4 text-xs flex flex-col font-bold" type="submit">Registrarse</button>
        </div>
    </div>
</x-layoutbg>
