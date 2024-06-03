<x-layout>
    @foreach ($talleres as $taller)
        <div class="flex flex-col items-center justify-center">
            <div class="bg-gray-200 rounded-[24px]  pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl w-5/6">
                <p class="text-2xl font-bold">{{ $taller->name }}</p>
                <p class="mt-4">Mecánico</p>
                <p class="font-bold pl-2">Juan Pérez</p>
                <p class="mt-4">Contacto</p>
                <p class="font-bold pl-2">Juanmecanico@example.com</p>
                <p class="font-bold pl-2">{{ $taller->phone }}</p>
                <p class="mt-6">Horario de atención</p>
                <p class="font-bold pl-2">De lunes a sábado de 8:00 AM a 8:00 PM</p>
                <p class="mt-6">Valoración</p>
                <p class="font-bold pl-2">Sofia@example.com</p>
                <p class="font-bold pl-2">Sofia@example.com</p>
                <p class="font-bold pl-2">Sofia@example.com</p>
            </div>
        </div>
    @endforeach
</x-layout>
