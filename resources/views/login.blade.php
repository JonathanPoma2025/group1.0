<x-layout>

    <div class="bg-gray-100 flex flex-col justify-center items-center h-screen">
        <div class="bg-gray-200 p-8 rounded-lg shadow-lg md:w-2/4 mb-4 ">
            <h1 class="text-2xl font-bold mb-4 text-center">Iniciar sesión</h1>

            <x-input type="email" id="email" name="email" type="email">Correo electrónico:</x-input>

            <x-input type="email" id="email" name="email" type="password">Contraseña:</x-input>

                <button class="bg-gray-300 text-black rounded-full p-1 px-4">Iniciar sesión</button>
        </div>

            <div class="bg-gray-200 p-4 rounded-lg shadow-md custom-width w-2/4 text-center text-gray-600">
                <p>¿No tienes cuenta?</p>
                <button class="bg-gray-300 text-black rounded-full p-1 px-4">Registrarse</button>
            </div>

    </div>

</x-layout>
