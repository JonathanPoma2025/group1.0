<x-layoutbg1>
    <div class="flex flex-col justify-center items-center h-screen w-full pt-2 mb-[172px]">
        <x-card>
            <img src="{{ asset("images/logocar.png")}}" alt="" class="mx-auto w-16">
            <div class="space-y-2">
                <h1>Mecánico</h1>
                <h1 class="pl-6">Juan Pérez</h1>
                <h1>Contacto</h1>
                <h2 class="pl-6">juanmecanico@example.com</h2>
                <h2 class="pl-6">+503 7477 8037</h2>
                <h1>Horario de atención</h1>
                <h2 class="pl-6">De lunes a sábado de 8:00 AM a</h2>
                <h2 class="pl-6">8:00 PM</h2>
                <h1>Valoraciones</h1>
                <h2 class="pl-8">Sofia@example.com⭐⭐⭐⭐</h2>
                <h2 class="pl-8">Sofia@example.com⭐⭐⭐</h2>
                <h2 class="pl-8">Sofia@example.com⭐⭐⭐⭐⭐</h2>
            </div>
            <div class="space-x-5 justify-center">
            <x-primary-button>Editar</x-primary-button> <x-primary-button>Cerrar sesión</x-primary-button>
           </div>
        </x-card>
    </div>
    <x-navigationbarcliente/>
</x-layoutbg1>
