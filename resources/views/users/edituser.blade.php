<x-layout title="editacion">
    <form action="">
    <div class="bg-gray-100 flex justify-center items-center h-screen shadow-3xl">
        <div class="flex flex-col items-center">
            <div class="bg-gray-200 p-8 rounded-lg shadow-md w-8/4 mb-4 ">
                <h1 class="text-2xl font-bold mb-4 text-center">Perfil</h1>

                <x-input id="name" name="name" type="text">Nombre</x-input>

                <x-input  id="email" name="email" type="text">Correo electrónico</x-input>

                <x-input  id="password" name="password" type="text">Contraseña</x-input>

            </div>

        </div>
    </form>
</x-layout>
