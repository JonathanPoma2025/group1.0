<x-layout>
    <div class="h-screen flex items-center">
        <div class="bg-ourblack bg-opacity-30 drop-shadow-2xl rounded-2xl py-10 px-8 md:px-10 shadow-2xl w-full my-14 md:mx-16">
            <img src="{{ asset('images/logo 2.png') }}" class="mx-auto w-24">
            <h1 class="my-4 text-center text-white">Iniciar sesión  en
                <p class="font-ubuntu text-2xl">
                    TrackMate
                </p>
            </h1>
            <form action="/login" method="POST" class="text-center mt-6">
                @csrf
                <x-input id="email" name="email" type="email">Correo electrónico</x-input>
                <x-input id="password" name="password" type="password">Contraseña</x-input>

                <x-primary-button class="text-white"><a>Iniciar sesión</a></x-primary-button>
            </form>

            <p class="text-white mt-4 text-center">¿No tienes cuenta? <a href="{{ route('register') }}"
                    class="underline">Registrate</a></p>
        </div>
    </div>
</x-layout>
