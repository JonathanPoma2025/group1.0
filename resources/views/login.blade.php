<x-layout>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

  <div class="flex flex-col items-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full mb-20">
      <h1 class="text-2xl font-bold mb-4">Iniciar sesión</h1>
      <div class="mb-10">
        <label for="email" class=" text-gray-700">Dirección de correo eléctronico:</label>
        <input type="email" id="email" name="email" class="form-input mt-1 block w-full border-gray-500 rounded-md shadow-sm">
      </div>
      <div class="mb-20">
        <label for="password" class="text-gray-700">Contraseña:</label>
        <input type="password" id="password" name="password" class="form-input mt-1 block w-full border-gray-500 rounded-md shadow-sm">
      </div>
      <button class="bg-gray-200 text-black text-center py-2 px-4 rounded">Iniciar sesión</button>
    </div>

    <div class="bg-white p-4 rounded-lg shadow-md max-w-md w-full text-center text-gray-600">
      <p>¿No tienes cuenta?</p>
      <button class="text-blue-500 hover:underline focus:outline-none">Registrarse</button>
    </div>
  </div>

</body>
</html>
    
    
</x-layout>
