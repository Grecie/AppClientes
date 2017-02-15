<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <title>Instalador</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="one-half column" style="margin-top: 25%">
            <h4>Si es tu primera Ejecución Ingresa Los datos requeridos</h4>
            <p> Este archivo de configuración es un asistente para la instalación, al terminar la instalación deberá ser borrado por seguridad</p>
            <form action="testaction.php" method="post">
                <div class="row">
                    <div class="six columns">
                        <label for="host">Ingresa el nombre del servidor</label>
                        <input class="u-full-width" type="text" name="host" placeholder="localhost" id="host">
                    </div>
                    <div class="six columns">
                        <label for="user">Ingresa el nombre de usuario del servidor</label>
                        <input class="u-full-width" type="text" name="user" laceholder="root" id="user">
                    </div>
                </div>
                <div class="row">
                    <div class="six columns">
                        <label for="password">Ingresa la contraseña del servidor</label>
                        <input class="u-full-width" type="password" name="password" placeholder="abc123" id="password">
                    </div>
                </div>

                <input class="button-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>