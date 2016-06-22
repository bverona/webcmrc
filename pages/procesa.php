<?php


    //Registrar Imágenes
    if ($_FILES['imgp']["error"] > 0 && $_FILES['imgp']["size"] > 0)
    {
        echo "Error al subir imagen pequeña <br>";
    }
    elseif ($_FILES['imgg']["error"] > 0  && $_FILES['imgg']["size"] > 0)
    {
        echo "Error al subir imagen grande <br>";
    }
    else
    {
        $target_path = "../images/";
        $fotop = $target_path . ( $_FILES['imgp']['name']);
        $fotog = $target_path . ( $_FILES['imgg']['name']);

        if(move_uploaded_file($_FILES['imgp']['tmp_name'], $fotop))
        {
            if(move_uploaded_file($_FILES['imgg']['tmp_name'], $fotog))
            {
                #header('location: notice.php');
            }
            else
            {
                echo "Ha ocurrido un error al subir foto grande";
            }
        }else
        {
            echo "Ha ocurrido un error al subir foto pequeña";
        }
    }

    $titulo=$_POST['titulo'];
    $body=$_POST['body'];

    require '../Clases/clsNotice.php';

    $objNotice = new Notice();

    if($objNotice->Add($titulo,$_FILES['imgp']['name'],$_FILES['imgg']['name'],$body))
    {
        echo "Registrado!";
    }


