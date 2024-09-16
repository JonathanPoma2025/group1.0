<x-layout>
    <div class="flex flex-col items-center scroll-full mt-8 mb-24">
        <h1 class="text-xl text-gray-5 font-bold my-6 text-center">Mantenimientos programados</h1>

        <a href="{{ route('clients.create') }}" class="mb-8">
            <x-primary-button>Agregar un nuevo cliente</x-primary-button>
        </a>

        @foreach($maintenances as $m)
            <div class="flex flex-col items-center mb-4">
                <div class="rounded-2xl px-6 py-6 mb-6 shadow-2xl w-72  bg-ourblack bg-opacity-30 text-white">
                    <p class="">{{ $m }}</p>
                    <p class="font-bold pl-2">{{ $m }}</p>

                </div>
            </div>
        @endforeach
    </div>

    <x-navigationbartaller/>
</x-layout>
