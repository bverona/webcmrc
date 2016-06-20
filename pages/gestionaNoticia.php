<?php

    $type=$_POST['type'];
    $id=$_POST['id'];
    $state=$_POST["state"];

    require '../Clases/clsNotice.php';

    $objNotice = new Notice();

    if($type=1)
    {
        $objNotice->ChangeStateNotice($id,$state);
    }elseif($type=2)
    {
        $objNotice->EditeNotice();
    }else
    {

    }
