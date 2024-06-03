<x-layout>

    <div class="bg-gray-100 flex flex-col items-center m-20 ">
        <div class="bg-transparent p-8 rounded-lg md:w-2/4 h-96 ">
            <h1 class="text-2xl font-bold mb-4 text-center">Iniciar sesión</h1>
            <form action="">
                <x-input type="email" id="email" name="email" type="email">Correo electrónico:</x-input>

                <x-input type="email" id="email" name="email" type="password">Contraseña:</x-input>

                <button class="bg-gray-300 text-black rounded-full p-1 px-4" type="submit">Iniciar sesión</button>
            </form>
        </div>



    </div>

</x-layout>
