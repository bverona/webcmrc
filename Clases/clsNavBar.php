<?php

class NavBar {

    public  function  getNavbar(){
        require_once 'clsConexion.php';

        $objCon =new Conexion();

        $sql='select item from item WHERE name="navbar"';

        $registro=$objCon->Consultar($sql)->fetch();

        return $registro['item'];

    }

    public  function  getNavbar2(){
        require_once 'clsConexion.php';

        $objCon =new Conexion();

        $sql='select item from item WHERE name="navbar2"';

        $registro=$objCon->Consultar($sql)->fetch();

        return $registro['item'];

    }

} 