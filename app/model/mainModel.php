<?php
//identificador uno que tendra esta clase
namespace App\Model;

/**busca si un archivo existe en la ruta especificada */
if (file(__DIR__."/../../config/Config/server.php")) {
    require_once __DIR__."/../../config/Config/server.php";
}

//clase principal del modelo
class mainModel {

    //propiedades y almacenan las constante del archivo server.php
    private $server= BD_SERVER;
    private $db= BD_NAME;
    private $user= BD_USER;
    private $pass= BD_PASS;

}

?>