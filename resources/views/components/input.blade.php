<<<<<<< HEAD
 <div class="w-full mb-4 text-left">
    <label for="email" class="block text-gray-5 text-md mb-1">{{ $slot }}</label>
    <input {{ $attributes }}
        class="form-input px-3 py-0.5 block w-full border-gray-300 rounded-md shadow-sm bg-ourblack text-gray-5">
=======
<div class="md:w-full mb-4 text-left">
    <label for="email" class="block text-gray-5 text-sm mb-1">{{ $slot }}</label>
    <input {{ $attributes }}
        class="form-input px-3 block md:w-full border-gray-300 rounded-md shadow-sm bg-ourblack text-gray-5">
</div>
>>>>>>> c787562cd03f481773a583c362e276e42b5a4880

    @error($attributes['name'])
        <p class="text-red-400">{{ $message }}</p>
    @enderror
</div>
