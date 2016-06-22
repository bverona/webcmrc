<?php

    $imgp=0;
    $imgg=0;

    $titulo=$_POST['titulo'];
    $body=$_POST['body'];
    $id=base64_decode($_POST['id']);

    require '../Clases/clsNotice.php';

    $objNotice = new Notice();


    //Registrar Imágenes
    if ( $_FILES['imgp']["size"] > 0)//no subió
    {
        $imgp=1;
        echo "imgp".$imgp."<br>";
    }
    if ($_FILES['imgg']["size"] > 0)//no subió
    {
        $imgg=1;
        echo "imgg".$imgg."<br>";
    }

    $target_path = "../images/";
    $fotop = $target_path . ( $_FILES['imgp']['name']);
    $fotog = $target_path . ( $_FILES['imgg']['name']);

    if($imgp!=0 && $imgg==0)//solo pequeña
    {
        move_uploaded_file($_FILES['imgp']['tmp_name'], $fotop);
        $objNotice->Edite2($id,$titulo,$_FILES['imgp']['name'],$body);
            echo "Edite2";

    }elseif($imgg!=0 && $imgp==0)//solo grande
    {
        move_uploaded_file($_FILES['imgg']['tmp_name'], $fotog);
        $objNotice->Edite3($id,$titulo,$_FILES['imgg']['name'],$body);
        echo "Edite3";
    }elseif($imgg==0 && $imgp==0)//ninguna
    {
        $objNotice->Edite4($id,$titulo,$body);
        echo "Edite4";
    }else{//las dos
        echo "Edite";
        $objNotice->Edite($id,$titulo,$_FILES['imgp']['name'],$_FILES['imgg']['name'],$body);
        move_uploaded_file($_FILES['imgp']['tmp_name'], $fotop);
        move_uploaded_file($_FILES['imgg']['tmp_name'], $fotog);
    }
