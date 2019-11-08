<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea 4.3</title>
    </head>
    <body>
        <form action="{{route('storeForm3')}}" method="post">
			@csrf
			Nombre:<br>
			<input type="text" name="nombre" value="{{old('nombre')}}"><br><br>
			Primer apellido:<br>
			<input type="text" name="apellido" value="{{old('apellido')}}"><br><br>
			<button type="submit">Enviar</button>
        </form> 
        @if (isset($nombre) ) 
            @foreach ($idiomas as $idioma)
                <p>{{$idioma->saludo}} {{$nombre}}!!</p>
            @endforeach
        @endif
        <p><a href="/">Volver al menú de tareas</a></p>
    </body>
</html>