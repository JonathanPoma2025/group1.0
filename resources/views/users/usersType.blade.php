<x-layoutbg1 title="Usertype">
    <div class="h-screen flex items-center" >
        <div class="py-12 px-22 bg-card bg-opacity-30 backdrop-blur-sm drop-shadow-2xl mx-6 rounded-3xl">
            <h1 class="text-2xl font-bold my-4 text-center text-white px-20">¿Como quieres registrarte?</h1>
            <form action="/users/type" method="POST" class="text-center mt-6">
                @csrf
                <div>
                    <input name="is_mechanic" value="0" class="hidden">
                    <button class="bg-card bg-opacity-50 text-white rounded-lg py-4 my-3 px-8" type="submit">Cliente</button>
                </div>
        </form>

            <form action="/users/type" method="POST" class="text-center mt-6">
                @csrf
                <input name="is_mechanic" value="1" class="hidden">
                <button class="bg-card bg-opacity-50 text-white rounded-lg py-4 my-3 px-9" type="submit">Taller</button>
            </form> 
        </div>
    </div>
<x-navigationbartaller></x-navigationbartaller>
</x-layoutbg1>
