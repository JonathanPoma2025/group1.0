<x-layoutbg1 title="Usertype">
    <div class="h-screen flex items-center" >
        <div class="py-12 px-20 bg-white/15 backdrop-blur-sm rounded-xl drop-shadow-2xl mx-6">
            <h1 class="text-2xl font-bold my-4 text-center text-white">¿Como quieres registrarte?</h1>
            <form action="/users/type" method="POST" class="text-center mt-6">
                @csrf
                <div>
                    <input name="is_mechanic" value="0">
                    <button class="bg-gray-300 text-black rounded-full py-4 my-3 px-8" type="submit">Cliente</button>
                </div>
                <div>
                    <input name="is_mechanic" value="1">
                    <button class="bg-gray-300 text-black rounded-full py-4 my-3 px-9" type="submit">Taller</button>
                </div>
        </form>
    </div>
</x-layoutbg1>
