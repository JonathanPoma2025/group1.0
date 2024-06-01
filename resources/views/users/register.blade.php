<x-layout title="Register">

    <div class="bg-gray-100 flex justify-center items-center h-screen shadow-3xl">
        <div class="flex flex-col items-center">
            <div class="bg-gray-200 p-8 rounded-lg shadow-md w-8/4 mb-4 ">
                <h1 class="text-2xl font-bold mb-4 text-center">Registrarse</h1>

                <x-input id="name" name="name" type="text">Nombre</x-input>

                <x-input id="date" name="date" type="date">Fecha de nacimiento</x-input>

                <x-input  id="email" name="email" type="text">Correo electrónico:</x-input>

                <x-input  id="password" name="password" type="text">Contraseña:</x-input>


                <div class="text-center">
                    <button class="bg-gray-300 text-black rounded-full p-1 px-4">Registrarse</button>
                </div>
            </div>

            <div class="bg-gray-200 p-4 rounded-lg shadow-md custom-width w-full text-center text-gray-600">
                <p>¿Ya tienes cuenta?</p>
                <button class="bg-gray-300 text-black rounded-full p-1 px-4">Iniciar sesión</button>
            </div>
        </div>
        

        </body>

        </html>
</x-layout>
