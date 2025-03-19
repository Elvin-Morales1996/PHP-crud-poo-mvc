<?php
/**creo un namespace para mi controlador
 * asi tengo organizado todo mi proyecto y no me 
 * va a generar problemas con otros archivos que tengan el mismo nombre
 */
namespace app\controller;

/*use app\models\viewsModel: este use es para importar 
el modelo de mi vista y poder utilizarlo en mi controlador */
use app\model\viewsModel;

class viewsController extends viewsModel{
/**
 * este método se encarga de obtener la vista que se debe cargar.
 * Recibe $vista como parámetro (ejemplo: "dashboard", "login", etc.).
 * */

    public function obtenerVistasModel($vista){
        /** Si $vista tiene un valor, se llama al método obtenerVistasModel($vista) del modelo viewsModel 
         * para obtener la vista correspondiente.
         * "$this->obtenerVistasModel($vista)" usa el método del modelo porque esta clase hereda de viewsModel*/
        if ($vista!="") {
            $respuesta = $this->obtenerVistasModel($vista);
            /**Si $vista es una cadena vacía (""), se asigna "login" como vista por defecto.
    Esto significa que si el usuario no ingresa ninguna vista en la URL, será redirigido a "login". */
        }else{
            $respuesta="login";
        }
        //Devuelve la vista obtenida para que el sistema la cargue.
        return $respuesta;
    }

}

?>