<x-layoutbg1  title="editacion">

    <div class="h-screen flex items-center scale-50 ">
        <div class="py-12 px-20 rounded-lg drop-shadow-2xl  bg-white/15 backdrop-blur-sm  ">



                <div class="pl-2 font-bold text-2xl">
                    <img class="inline rounded-full w-16 h-16 shadow-lg" src="{{ asset('imagenes/avata.png') }}">
                Cliente 1
            </div>



            <form action="/edit" method="POST" class=" mt-10 text-left text-white">
                <p class="mt-4">Nombre</p>
                <p class="font-bold pl-2">Sofia Medina</p>


                <p class="mt-4">Contacto</p>

                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset("imagenes/mail_24dp_FILL0_wght400_GRAD0_opsz24 (1).png") }}">
                    sofia@example.com
                </div>

                <div class="pl-2 font-bold">
                    <img class="inline w-5" src="{{ asset('imagenes/call_24dp_FILL0_wght400_GRAD0_opsz24.png') }}">
                    +503 7477 8037
                </div>


                <p class="mt-6">Vehiculo</p>

                <div class="pl-2 font-bold">
                    <img class="inline w-5"
                        src="{{ asset('imagenes/directions_car_24dp_FILL0_wght400_GRAD0_opsz24.png') }}">
                    Auto sedan
                </div>

                <p class="mt-6">Marca</p>
                <p class="font-bold pl-2">Hyundal</p>
                <p class="mt-6">Modelo</p>
                <p class="font-bold pl-2">Elantran</p>
                <p class="mt-6">Año</p>
                <p class="font-bold pl-2">2013</p>
                <p class="mt-6">Placa</p>
                <p class="font-bold pl-2">P-2000877</p>
                <p class="mt-6">Color</p>
                <p class="font-bold pl-2">Gris</p>
                <p class="mt-6">Motor</p>
                <p class="font-bold pl-2">1.6 'CRDi' de 136CV</p>


                <div class="space-x-10">
                    <button class="rounded-full bg-blueblack text-white px-4 mt-20  ">Cerrar Sesión</button>

                <button class="rounded-full bg-blueblack text-white  px-4 space-x-6 "  >Editar</button>

                </div>
            </form>

        </div>
    </div>

</x-layoutbg1>
