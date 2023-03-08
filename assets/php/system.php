<?php
    require_once("Autoload.php");
    
    $objUsuario = new Usuario();

    //insert usuario
   $insert=$objUsuario->insertUsuario("Carlos",1209485734,"calos@gmail.com");
   echo $insert;


   //consulta
   $usuarios = $objUsuario->getUsuarios();
   print_r($usuarios);
?>