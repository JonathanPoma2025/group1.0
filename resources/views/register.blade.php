<x-layout>
<head>
  <title class="text-center">Registrarse</title>
  <style>
    .custom-width {
      width: 30rem;
    }
  </style>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen shadow-3xl">

    <div class="flex flex-col items-center">
    <div class="bg-gray-200 p-8 rounded-lg shadow-md custom-width w-full mb-4 ">
      <h1 class="text-2xl font-bold mb-4 text-center">Registrarse</h1>

      <div class="mb-4">
        <label for="email" class="block text-gray-700">Nombre:</label>
        <input type="email" id="email" name="email" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm">
      </div>

        <div class="mb-6">
        <label for="password" class="block text-gray-700">Apellido:</label>
        <input type="text" id="password" name="password" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-6">
        <label for="password" class="block text-gray-700">Fecha de nacimiento:</label>
        <input type="text" id="password" name="password" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-6">
        <label for="password" class="block text-gray-700">Dirección de correo electrónico:</label>
        <input type="text" id="password" name="password" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-6">
        <label for="password" class="block text-gray-700">Contraseña:</label>
        <input type="password" id="password" name="password" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="text-center">
            <button class="bg-gray-300 text-black rounded-full p-1 px-4">Registrarse</button>
        </div>
    </div>

    <div class="bg-gray-200 p-4 rounded-lg shadow-md custom-width w-full text-center text-gray-600">
      <p>¿No tienes cuenta?</p>
      <button class="bg-gray-300 text-black rounded-full p-1 px-4">Registrarse</button>
    </div>
  </div>

</body>
</html>
</x-layout>