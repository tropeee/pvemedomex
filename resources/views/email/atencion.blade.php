<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atención Ciudadana</title>
</head>
<body>

    <div style="padding: 10rem; border: 2px solid black">

        <h1 style="text-align: center; background-color: #6AC262; color: white; padding: 3rem; margin-bottom:0">Nueva Atención Ciudadana</h1>
        <br>
        <br>

        <div style="background-color:azure">
        <p><strong>Nombre (s):</strong> {{$datos['nombres']}}</p>
        <p><strong>Apellidos:</strong> {{$datos['apellidos']}}</p>
        <p><strong>Correo electrónico:</strong> {{$datos['email']}}</p>
        <p><strong>Teléfono:</strong> {{$datos['telefono']}}</p>
        <p><strong>Municipio:</strong> {{$datos['municipio']}}</p>
        <p><strong>Tipo de Solicitud:</strong> {{$datos['tipo_solicitud']}}</p>
        <p><strong>Justificación:</strong> {{$datos['justificacion']}}</p>

        </div>
    </div>


</body>
</html>
