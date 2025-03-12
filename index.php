<?php
/*se encarga de gestionar la ruta 
Si en la URL hay un parámetro view, lo separa en un array usando / como delimitador.
Si no hay view, define ["login"] como ruta por defecto. */
    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/inc/session_start.php";
    if (isset($_GET['view'])) {
        $url= explode("/",$_GET['view']);
    }else{
        $url=["login"];
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
<?php require_once "./app/views/inc/head.php"   ?>
</head>
<body>
<?php require_once "./app/views/inc/script.php"   ?>
</body>
</html>