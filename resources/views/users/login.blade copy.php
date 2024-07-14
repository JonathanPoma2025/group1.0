<x-layoutbg1 title="Login">

    <div class="h-screen flex items-center">
        <div class="py-12 px-20 bg-ourblack bg-opacity-30 rounded-lg drop-shadow-2xl">
            <img src="{{asset("imagenes/caricon.png")}}" class="mx-auto w-24">
            <h1 class="text-2xl font-bold my-4 text-center text-white">Iniciar sesión en TrackMate</h1>
            <form action="/login" method="POST"  class="text-center mt-6">
                @csrf
                <x-input id="email" name="email" type="email">Correo electrónico</x-input>
                <x-input id="password" name="password" type="password">Contraseña</x-input>

                <x-primary-button>Iniciar sesión</x-primary-button>
            </form>

            <p class="text-white mt-4 text-center">¿No tienes cuenta? <a href="{{route('register')}}" class="underline">Registrate</a></p>
        </div>
    </div>

</x-layoutbg1>

