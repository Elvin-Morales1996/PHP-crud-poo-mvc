<?php

/*namespace app\model:
 * Este es el espacio de nombres para la clase viewsModel.
 * sera unico esta clase por si dado caso hay otra clase con el mismo nombre.
 * cuando creo un modelo se debe poner el nombre de la clase como el nombre del archivo.
 *  
 */
namespace app\model;
class viewsModel{

//una funcion que estara protegida.
/*
una funcion que maneja las vistas. estara protegida y que solo esta clase puede usar 
y las que hereden de ella


*/
protected function obtenerVistasModel($vista){
    //creando un arreglo con las vistas que se van a mostrar.
    $listaBlanca = ["dashboard"];

    if (in_array($vista, $listaBlanca)) {
        if (is_file("./app/views/content/".$vista."-view.php")) {
            $contenido = "./app/views/content/".$vista."-view.php";
        }else{
            $contenido="404";
        }//else del if mayor
    }//if
    elseif($vista=="login" || $vista=="index"){
            $contenido = "login";

    } //elseif
    else{
        $contenido = "404";
    }//else
    return $contenido;
}//es la funcion
}//es de la clase

?>




