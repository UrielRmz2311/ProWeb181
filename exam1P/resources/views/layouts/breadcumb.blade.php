<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">LOGIN</a></li>
          <li class="breadcrumb-item"><a href="/Bproductos">Búsqueda de Productos</a></li>
        </ol>
      </nav>

    @yield('contenido')
    
</body>
</html>