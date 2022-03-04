<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto Candidato</title>
</head>
<body>

    <div style="padding: 10rem; border: 2px solid black">

        <h1 style="text-align: center; background-color: #6AC262; color: white; padding: 2rem; margin-bottom:0">Formulario de contacto recibido</h1>
        <br>
        <br>

        <div style="background-color:azure; padding: 2rem">
            <ul>
                <li><strong>Nombre:</strong> {{$datos['nombre']}}</li>
                <li><strong>Municipio:</strong> {{$datos['municipio']}}</li>
                <li><strong>Correo electrónico:</strong> {{$datos['email']}}</li>
                <li><strong>Teléfono:</strong> {{$datos['telefono']}}</li>
                <li><strong>Propuestas o comentarios:</strong> {{$datos['propuestas']}}</li>
            </ul>
        </div>
    </div>


</body>
</html>
