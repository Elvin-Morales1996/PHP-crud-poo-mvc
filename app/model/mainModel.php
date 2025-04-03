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

//funcion publica para evitar inyeccion sql
//recibe como parametro un string 
public function limpiar_Cadena($cadena){
    //creo un arreglo donde pongo las posibles inyecciones
    //se puede agregar mas si yo quiero
    $palabras=["<script>","</script>","<script src","<script type=",
    "SELECT * FROM","SELECT "," SELECT ","DELETE FROM","INSERT INTO","DROP TABLE",
    "DROP DATABASE","TRUNCATE TABLE","SHOW TABLES",
    "SHOW DATABASES","<?php","?>","--","^","<",">","==","=",";","::"];

    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);

    foreach ($palabras as $palabra) {
        $cadena = str_ireplace($palabra,"",$cadena);
    }
    $cadena = trim($cadena);
    $cadena = stripslashes($cadena);

    return $cadena;

}


//verificar datos para filtro 
protected function verificarDatos($filtro, $cadena){
    if (preg_match("/^".$filtro. "$/", $cadena)) {
        return false;

    }else{
        return true;
    }
  
}

}
?>