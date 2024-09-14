<x-layout>
    <div class="flex flex-col items-center scroll-full mb-[172px]">
        <div class="py-12 px-20 bg-ourblack bg-opacity-30 drop-shadow-2xl rounded-2xl pt-4 pl-10 pr-10 pb-10 mb-6 shadow-2xl m-42 my-40 md:mx-16">

            <h1 class="text-2xl font-bold my-4 text-center text-white mb-10">Agregar Clientes</h1>
            <form action="{{ route('clients.store') }}" method="POST" class="text-center mt-6">

                @csrf
                <x-input id="email" name="email" type="email" placeholder="Correo"/>

                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>

                        <option value="US">United States</option>

                    </select>

                <x-primary-button class="text-white">Agregar</x-primary-button>
            </form>
        </div>

    </div>

    <x-navigationbartaller/>
</x-layout>




