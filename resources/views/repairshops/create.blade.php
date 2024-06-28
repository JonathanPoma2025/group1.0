<x-layoutbg1>
    <div class="flex flex-col justify-center items-center h-screen w-full my-5">
        <x-card>
            <img src="{{ asset("images/logocar.png")}}" alt="" class="mx-auto w-32">

            <h1 class="text-xl text-gray-5 py-2 font-bold mb-4 text-center">Registra tu taller</h1>

                <div class="mb-4 px-9 flex flex-col items-center">
                    <x-input type="" id="" name="">Nombre del taller</x-input>

                    <x-input type="" id="" name="">Propietario</x-input>

                    <x-input type="" id="" name="">Dirección</x-input>

                    <x-input type="email" id="email" name="correo">Dirección de correo electrónico</x-input>

                    <x-input type="password" id="" name="contraseña">Contraseña</x-input>
                </div>
            <button class="mx-auto bg-babyblue text-gray-5 rounded-full p-1 px-4 text-xs flex flex-col font-bold" type="submit">Registrarse</button>
        </x-card>
    </div>
</x-layoutbg1>
