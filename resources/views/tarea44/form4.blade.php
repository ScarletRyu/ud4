<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tarea 4.4</title>
    </head>
    <body>
<form method="post" action="{{route('storeForm4')}}">
            @csrf
            <label>Nombre: </label><input type="text" name="nombre" id="nombre" value="{{old('nombre')}}"><br>
            {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            <label>Apellido: </label><input type="text" name="apellido" id="apellido" value="{{old('apellido')}}"><br>
            {!! $errors->first('apellido', '<small>:message</small><br>') !!}
            <label>Email: </label><input type="email" name="email" id="email" value="{{old('email')}}"><br>
            {!! $errors->first('email', '<small>:message</small><br>') !!}
            <label>Telefono: </label><input type="number" name="tlf" id="tlf" value="{{old('tlf')}}"><br>
            {!! $errors->first('tlf', '<small>:message</small><br>') !!}
            <input type="submit" name="enviar" value="enviar">
        </form>
    </body>
</html>