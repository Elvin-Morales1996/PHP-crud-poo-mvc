<?php
/*se encarga de gestionar la ruta 
Si en la URL hay un parámetro view, lo separa en un array usando / como delimitador.
Si no hay view, define ["login"] como ruta por defecto. */
    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/inc/session_start.php";
    if(isset($_GET['views'])){
        $url=explode("/", $_GET['views']);
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

<?php


    use app\controller\viewsController;



    $viewsController = new viewsController();
    $vista = $viewsController->obtenerVistasModel($url[0]);
    if($vista=="login" || $vista=="404"){
        require_once "./app/views/content/".$vista."-view.php";
    } elseif ($vista == "login") {
        require_once "./app/views/content/login-view.php";
    } else {
        require_once "./app/views/inc/navbar.php";
        require_once $vista; 
    }
    require_once "./app/views/inc/script.php"; 

?>



</body>
</html>