<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>vista productos(Index)</h1>
    <table >
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
                <td>{{$producto->sabor_id}}</td>
                <td>{{$producto->tamanio_id}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
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