<x-layoutbg1 title="Register">
    <div class="flex flex-col items-center scroll-full mb-[172px]">
        <div class=" py-12 px-20 bg-ourblack bg-opacity-30  drop-shadow-2xl rounded-[24px] pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl w-5/6 my-20 md:mx-16">
            <h1 class="text-2xl font-bold my-4 text-center text-white">Registrarse</h1>
            <form action="/register"  method="POST"  class="text-center mt-6">
                @csrf
                <x-input  id="name" name="name" type="text">Nombre</x-input>
                <x-input  id="email" name="email" type="email">Correo electrónico</x-input>
                <x-input  id="birthday" name="birthday" type="date">Fecha de nacimiento</x-input>
                <x-input  id="cellphone" name="cellphone_number" type="text">Número de teléfono</x-input>
                <x-input  id="password" name="password" type="password">Contraseña</x-input>
                <x-primary-button class="bg-ourblack bg-opacity text-white">Registrarse</x-primary-button>
            </form>
            <p class="text-white mt-4">¿Ya tienes cuenta? <a href="{{route('login')}}" class="underline">Inicia sesión</a></p>
        </div>
    </div>
    <x-navigationbarcliente />
</x-layoutbg1>
