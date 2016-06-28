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

    public function EditNavbar($html){

        require_once "clsConexion.php";
        $objCon =new Conexion();

        $sql="update news set titulo='".$title."'".",content='".$body."' where id=".$id;

        $reg=$objCon->Consultar($sql);

        if($reg!=null)
        {
            return true;
        }else
        {
            return false;
        }
    }



} 