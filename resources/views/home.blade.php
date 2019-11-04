<!DOCTYPE html>
<html>
<head>
	<title>UD4 - Laravel básico</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
	<h1>UD4 - Laravel básico</h1>
    <div class="row">
        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.1</span>
                <div class ="subtarea">
                    <p><a href="contacto">a) Contacto</a></p>
                    <p><a href="blog1/1">b) Blog con id</a></p>
                    <p><a href="blog2/1/jon">c) Blog con id y nombre</a></p>
                </div>
                </div>
        </div>

        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.2</span>
                <div class ="subtarea">
                    <p><a href="{{route('saludo')}}">a) Saludo</a></p>
                    <p><a href="{{route('saludoNombre',['nombre' => 'jon'])}}">b) Saludo con nombre</a></p>
                    <p><a href="{{route('saludoNombreColor',['nombre' => 'jon','color' =>'FF00FF'])}}">c) Saludo con nombre y color</a></p>
                </div>
                </div>
        </div>

        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.3</span>
                <div class="subtarea">
                <p><a href="#">a) Saludo nombre con apellido</a></p>
                
            </div>
                </div>
        </div>
     

    </div>

</body>
</html>