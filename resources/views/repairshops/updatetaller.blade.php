<x-layoutbg1>
    <div class="flex flex-col items-center scroll-full mb-[172px]">
        <div
            class="py-12 px-20 bg-ourblack bg-opacity-30  drop-shadow-2xl rounded-[24px] pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl w-5/6 my-20 md:mx-16">
            <img src="{{ asset('images/logo 2.png') }}" class="mx-auto w-24 rounded-full h-24">
            <h1 class="text-2xl font-bold my-4 text-center text-white">Taller 1</h1>
            <form action="/update" method="GET" class="text-center mt-6">
                @csrf
                <x-input id="name" name="name" type="text">Mecanico</x-input>
                <x-input id="email" name="email" type="email">Contacto</x-input>
                <x-input id="cellphone" name="cellphone" type="cellphone"></x-input>
                <x-input id="text" name="text" type="text">Horario de atención</x-input>
                <x-input id="text" name="text" type="text">Valoraciones</x-input>
                <x-input id="text" name="text" type="text"></x-input>
                <x-input id="text" name="text" type="text"></x-input>

                <x-primary-button class=" text-white">Guardar</x-primary-button>
            </form>


        </div>
  
<x-navigationbartaller></x-navigationbartaller>
</x-layoutbg1>
