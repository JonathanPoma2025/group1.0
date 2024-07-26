<x-layoutbg1 title="addcostumer">

    <div class="flex flex-col items-center scroll-full mb-[172px]">
        <div
            class="py-12 px-20 bg-ourblack bg-opacity-30 drop-shadow-2xl rounded-[24px] pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl m-42 my-40 md:mb-16">

            <h1 class="text-2xl font-bold my-4 text-center text-white mb-10">Agregar Clientes</h1>
            <form action="/update" method="GET" class="text-center mt-6">
                @csrf
                <x-input id="name" name="name" type="text">Correo</x-input>
                <x-primary-button class=" text-white">Agregar</x-primary-button>
            </form>


        </div>
        <x-navigationbartaller/>
</x-layoutbg1>
