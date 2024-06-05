<x-layout title="Register">

    <div class="h-screen flex items-center">
        <div class="py-12 px-20 bg-white/15 backdrop-blur-sm rounded-lg drop-shadow-2xl">
            <h1 class="text-2xl font-bold my-4 text-center text-white">Registrarse</h1>
            <form action=""  class="text-center mt-6">
                <x-input id="name" name="name" type="text">Nombre</x-input>
                <x-input id="date" name="date" type="date">Fecha de nacimiento</x-input>
                <x-input  id="email" name="email" type="text">Correo electrónico</x-input>
                <x-input  id="password" name="password" type="text">Contraseña</x-input>

                <x-primary-button>Registrarse</x-primary-button>
            </form>

            <p class="text-white mt-4">¿Ya tienes cuenta? <a href="{{route('login')}}" class="underline">Inicia sesión</a></p>
        </div>
    </div>
</x-layout>
