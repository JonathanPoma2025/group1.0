<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col justify-center items-center" style="background-image: url('{{ asset("imagenes/fondo.png") }}'); background-size: cover; background-position: center center;">
    {{$slot}}
</body>
</html>
