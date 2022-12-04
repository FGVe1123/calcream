<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de productos</title>

    {{--@vite(['resources/css/materialize.css', 'resources/js/materialize.js']) --}}

    
    <nav>
        <div class="nav-wrapper">
        <a href="/dashboard" >perfil</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/producto">Inicio</a></li>
            
        </ul>
        </div>
    </nav>
   


</head>
<center>
<body>

<div  >
    
        <h4>Registrar productos</h4>

        
                <form method="post" action="/producto">
                    @csrf
                            <label for="sabor">Sabor</label> <br>
                            <select name="sabor_id[]" id="sabor">

                                
                                @foreach ($sabores as $sabor)
                        <option value="{{ $sabor->id }}">{{ $sabor->sabor }}</option>
                                @endforeach
                            
                        </select>
                      

                                @error('sabor')
                                <li>{{ $message }}</li>
                                @enderror
                            <br>
                    
                
                            <label for="tamanio">Tamaño</label>  <br>  
                            <select name="tamanio" id="tamanio">

                                
                                @foreach ($tamanios as $tamanio)
                        <option value="{{ $tamanio->id }}">{{ $tamanio->tamanio }}</option>
                                @endforeach
                            
                        </select>
                        
                                @error('tamanio')
                                <li>{{ $message }}</li>
                                @enderror
                        
                                <br>
                    
                            <label for="precio">Precio</label>  <br>  
                            <input  id="precio" type="number" name="precio" value="{{ old('precio') }}">
                                @error('precio')
                                <li>{{ $message }}</li>
                                @enderror
                                <br>
                    
                            <label for="stock" class="active">Stock</label> <br>   
                            <input  id="stock" type="number" name="stock" value="{{ old('stock') }}">
                                @error('stock')
                                <li>{{ $message }}</li>
                                @enderror
                                <br>

                <input  type="submit" name="enviar" value="Enviar">
             
                </form>

  
</div>

</body>
</center>
</html>