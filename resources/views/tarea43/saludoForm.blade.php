<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea 4.1</title>
    </head>
    <body>
        @foreach ($idiomas as $idioma)
            <p>{{$idioma->saludo}} {{$nombre}}!!</p>
        @endforeach
        <p><a href="/">Volver al menú de tareas</a></p>
    </body>
</html>