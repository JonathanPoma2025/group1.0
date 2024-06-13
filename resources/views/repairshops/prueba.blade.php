<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegación Flotante</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <!-- Barra de Navegación Flotante -->
    <div class="relative">
        <div class="bg-white flex items-center justify-between rounded-full shadow-lg p-2 m-10">
            <img src="{{ asset("imagenes/caricon.png")}}" alt="" class="mx-auto w-10">
            <img src="{{ asset("imagenes/caricon.png")}}" alt="" class="mx-auto w-10">
            <img src="{{ asset("imagenes/caricon.png")}}" alt="" class="mx-auto w-10">
            <img src="{{ asset("imagenes/caricon.png")}}" alt="" class="mx-auto w-10">
            <img src="{{ asset("imagenes/caricon.png")}}" alt="" class="mx-auto w-10">
        </div>
    </div>
</body>
</html>
