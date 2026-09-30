<?php


require __DIR__ ."/../../vendor/autoload.php";

echo "hola";

session_start();

$_SESSION["alumno"] ??= [];

if($_SERVER["REQUEST_METHOD"] === "POST"){

echo "ESTOY EN POST";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <div clas="Formulario">
            <form action="" method="POST">
                <div>
                    <label for="">carnet</label><br>
                    <input type="text" name="carnet">
                </div>
                 <div>
                    <label for="">codigo</label><br>
                    <input type="text" name="codigo">
                </div>
                 <div>
                    <label for="">nombre</label><br>
                    <input type="text" name="nombre">
                </div>
                 <div>
                    <label for="">tipo</label><br>
                    <input type="text" name="tipo">
                </div>
                 <div>
                    <label for="">dias maximo</label><br>
                    <input type="text" name="diasMax">
                </div>
                 <div>
                    <button type="submit" >enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>