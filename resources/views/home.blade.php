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
                    <p><a href="contacto">A) Contacto</a></p>
                    <p><a href="blog1/1">B) Blog con id</a></p>
                    <p><a href="blog2/1/jon">C) Blog con id y nombre</a></p>
                </div>
                </div>
        </div>

        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.2</span>
                <div class ="subtarea">
                    <p><a href="{{route('saludo')}}">A) Saludo</a></p>
                    <p><a href="{{route('saludoNombre',['nombre' => 'jon'])}}">B) Saludo con nombre</a></p>
                    <p><a href="{{route('saludoNombreColor',['nombre' => 'jon','color' =>'FF00FF'])}}">C) Saludo con nombre y color</a></p>
                </div>
                </div>
        </div>

        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.3</span>
                <div class="subtarea">
                <p><a href="{{route('createForm1')}}">A) Formulario con datos GET</a></p>
                <p><a href="{{route('createForm2')}}">B) Formulario con datos POST</a></p>
                <p><a href="{{route('createForm3')}}">C) Saludo vista form</a></p>
            </div>
                </div>
        </div>
     
        <div class="column">
            <div class="card">
                <span class="titulo">Tarea 4.4</span>
                <div class="subtarea">
                <p><a href="{{route('createForm4')}}">A) Formulario validacion</a></p>
                <p><a href="{{route('createForm5')}}">B) Formulario validacion FormRequest</a></p>
            </div>
                </div>
        </div>
    </div>

</body>
</html>