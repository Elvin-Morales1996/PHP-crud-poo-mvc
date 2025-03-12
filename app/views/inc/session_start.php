<?php
//session_name(APP_SESSION_NAME): es el nombre de la session pero como 
/*APP_SESSION_NAME: viene de la carpetas config\config.php
donde puse el nombre de la session como una constante */
    session_name(APP_SESSION_NAME);
/*session_start(): inicia la session */
    session_start();
?>
