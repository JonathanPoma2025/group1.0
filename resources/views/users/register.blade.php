<x-layout>
    <div class="flex flex-col items-center">
        <div class="bg-ourblack bg-opacity-30 drop-shadow-2xl rounded-2xl py-10 px-8 md:px-10 shadow-2xl w-full my-14 md:mx-16">
            <img src="{{ asset('images/logo 2.png') }}" alt="" class="mx-auto w-28">
            <h1 class="my-4 text-center text-white">Registrate en
                <p class="font-ubuntu text-2xl">
                    TrackMate
                </p>
            </h1>
            <form action="/register"  method="POST"  class="text-center mt-6">
                @csrf
                <x-input  id="name" name="name" type="text">Nombre</x-input>
                <x-input  id="email" name="email" type="email">Correo electrónico</x-input>
                <x-input  id="birthday" name="birthday" type="date">Fecha de nacimiento</x-input>
                <x-input  id="cellphone" name="cellphone_number" type="text">Número de teléfono</x-input>
                <x-input  id="password" name="password" type="password">Contraseña</x-input>
                <x-primary-button class="bg-ourblack bg-opacity text-white">Registrarse</x-primary-button>
            </form>
            <p class="text-white mt-4 text-center">¿Ya tienes cuenta? <a class="underline" href="{{ route('login') }}">Inicia sesión</a></p>
        </div>
    </div>
</x-layout>
