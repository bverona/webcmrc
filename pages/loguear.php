<?php
$usuario= addslashes ($_POST["username"]);
$pass= addslashes ($_POST["pass"]);

require '../Clases/clsLoguin.php';

$objLoguin = new clsLoguin();

if ($objLoguin->Logueo($usuario,$pass))
{
    session_start();
    $_SESSION['login']=md5($usuario);

    echo true;

}else
{
    echo false ;
}













