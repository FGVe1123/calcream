<!DOCTYPE html>
<html lang="en">
<head>
    
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productos INDEX</title>

    <nav>
        <div class="nav-wrapper">
        <a href="/dashboard" class="brand-logo right">perfil</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="producto/create">Registrar Producto</a></li>        
        </ul>
        </div>
    </nav>
    
</head>
<body>
    <h1>vista productos(Index)</h1>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Existencia</th>
            <th>Nombre</th>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Acciones</th>
            
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->existencia}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->modelo}}</td>
                <td>{{$producto->precio}}</td>
                <td>
                    <a href="/producto/{{$producto->id}}/edit">Editar</a>
                </td>

                <td>
                    <a href="/producto/{{ $producto->id }}">Detalles</a>
                </td>

                <td>
                    <form action="/producto/{{ $producto->id }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Borrar">
                    </form>

                </td>
            </tr>

        @endforeach

    </table>
    
</body>
</html>