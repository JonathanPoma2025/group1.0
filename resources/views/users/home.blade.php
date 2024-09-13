<x-layout>

<div class="relative overflow-hidden w-full">
        <button class="text-end">
            <a href="/users/home">
                <img src="{{ asset('Images/Profile.png') }}" class="w-12 h-12">
            </a>
        </button>
        <div class=" bg-ourblack bg-opacity-20 rounded-full h-[175%] w-[200%] absolute bottom-[60%] -left-[50%] z-0 flex justify-center items-end md:*:">
            <article class="text-nowrap flex flex-col justify-center">

                <h2 class="text-white text-1xl">Tu Proximo mantenimiento es en:</h2>
                <p class="text-white  text-3xl font-bold text-center">2 meses</p>
                <x-primary-button class="mb-20 w-40 mx-auto">Editar datos</x-primary-button>

            </article>
        </div>

        <div class=" flex justify-center h-screen shadow-3xl z-40">
            <div class="grid items-center  justify-center text-xs">
                <div class="rounded-[24px] pl-12 py-6 mt-24 shadow-2xl w-72 bg-ourblack bg-opacity-30 text-white">
                    <p class="text-xl font-bold">Taller 1</p>

                    <p class="">Mecanico</p>
                    <p class="font-bold pl-2 ">Juanchito@example.com</p>
                    <p class="mt-2">Direccion</p>
                    <p class="font-bold pl-2">Rio de san blas</p>
                    <p class="mt-2">Contacto</p>
                    <p class="font-bold pl-2">+503 7542547</p>

                </div>
            </div>
        </div>
        <x-navigationbarcliente></x-navigationbarcliente>
    </div>
</div>
</x-layout>
