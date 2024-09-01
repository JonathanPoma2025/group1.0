<x-layoutbg1 title="Cuenta de taller" class="my-20">
    <div class="flex flex-col justify-center items-center h-screen w-full pt-2 mb-[172px]">
        <x-card>
            <img src="{{ asset("images/logocar.png")}}" alt="" class="mx-auto w-16">
            <div class="pl-2 font-bold text-2xl text-white space-y-2">
                Mecanico {{$user->name}}
            </div>
            <div class="mt-10 text-left text-white">
                <p class="mt-4">Contacto</p>
                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset('imagenes/mail_24dp_FILL0_wght400_GRAD0_opsz24 (1).png') }}">
                    {{ $user->email }}
                </div>
                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset('imagenes/call_24dp_FILL0_wght400_GRAD0_opsz24.png') }}">
                    {{ $user->cellphone_number }}
                </div>
                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{asset('calendario8.png')}}">
                    Horario de atención{{$user->}}
                </div>
                <div>
                    valoraciones {{}}
                </div>

            <div class="space-x-12 justify-center md:text-end ">
            <x-primary-button>Editar</x-primary-button> <x-primary-button>Cerrar sesión</x-primary-button>
           </div>
        </x-card>
    </div>
    <x-navigationbarcliente/>
</x-layoutbg1>


<h1>Valoraciones</h1>
<h2 class="pl-8">Sofia@example.com⭐⭐⭐⭐</h2>
<h2 class="pl-8">Sofia@example.com⭐⭐⭐</h2>
<h2 class="pl-8">Sofia@example.com⭐⭐⭐⭐⭐</h2>
