<?php
//identificador uno que tendra esta clase
namespace App\Model;


use PDO;

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


//funcion para conectarse a la base de dato
   protected function conectar(){
    
    $conexion = new PDO("mysql:host=".$this->server."dbname=".$this->db,$this->user,$this->pass);
    $conexion->exec("SET CHARACTER SET UTF8");
    return $conexion;

}

//funcion protegidda que solo puede usarse en la misma clase o herencia
//funcion para hacer consulta a la base de datos recibe parametro de la consulta
//consulta seria ejemplo: SELECT, INSERT, UPDATE, DELETE
protected function ejecutarConsulta($consulta){
    $sql = $this->conectar()->prepare($consulta);
    $sql->execute();
    return $sql;
}

}
?>