<?php


    require_once "../Clases/clsConexion.php";
    $objCon =new Conexion();
    echo $_POST["data"];
    $sql="update item set item='".$_POST['data']."' where name='navbar'";

    //echo $sql;
    //$reg=$objCon->Consultar($sql);