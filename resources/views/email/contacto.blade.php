<!--Contenido del correo electronico a enviar-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>

    <style>
        h1 {
            color: blue;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20pt;
        }

        p{
            font-family: 'Times New Roman', Times, serif;
            font-size: 14pt;
        }
    </style>
</head>

<body>
    <h1>Correo Electrónico enviado por Laravel</h1>
    <br>
    <p><strong>Nombre: </strong>{{$contacto['nombre']}}</p>
    <p><strong>Correo: </strong>{{$contacto['correo']}}</p>
    <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>
</body>

</html>