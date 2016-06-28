<?php
session_start();
if(empty($_SESSION['login']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Colegio Militar Ramón Castilla|| Piura Perú</title>
    <link rel="icon" href="../images/icon_ramoncastilla.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link href="../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../css/metisMenu.css" type="text/css"/>

    <link rel="stylesheet" href="../css/sb-admin-2.css" type="text/css"/>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css"/>

    <!-- DATATABLE STYLE SHEETS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>

</head>
<body>
<div id="wrapper">

        <?php
        include "../nvbcmrc.php";
        ?>

    <div id="page-wrapper" >

        <div class="row" style="padding-top: 1%">
            <div class="col-sm-6">
                <div id="tabla_length" class="dataTables_length">

                </div>

            </div>
            <div id="tabla_filter" class="col-sm-6">
                <div class="dataTables_filter">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-condensed" id="tabla">
                    <thead>
                    <th class="text-center">N°</th>
                    <th class="text-center">Título</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Eliminar</th>
                    </thead>
                    <tbody id="tbody">

                    <?php
                    require_once '../Clases/clsNotice.php';
                    $objNotice = new Notice();
                    echo $objNotice->ListNoticeTable();
                    ?>

                </table>
            </div>

        </div>

        <div class="container" style="padding-top: 5%">


        </div>

    </div>


    <div id="eliminara" class="modal fade" >
        <div class="modal-header">
            <a data-dismiss="modal" class="close">×</a>
            <h3>Confirmación</h3>
        </div>
        <div class="modal-body">
            <h3>¿Desea Eliminar la noticia?</h3>
        </div>
        <div class="modal-footer">

        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="eliminar" style="margin-top: 10%">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Eliminar</h4>
                </div>
                <div class="modal-body">
                    <h4>¿Está Seguro que desea eliminar la noticia?</h4>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-danger" onclick="Eliminar()">Eliminar</a>
                    <a href="#" data-dismiss="modal" class="btn btn-info" >salir</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="bottom-footer">
        <div class="container">
            <p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>

        </div>
    </div>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/metisMenu.js"></script>
<script type="text/javascript" src="../js/sb-admin-2.js"></script>
<script type="text/javascript" src="../js/Base64.js"></script>
<script type="text/javascript" src="../js/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#tabla').dataTable();

    });
    var valor;

    function Set(id){
        valor = id;
    }

    function ChangeState(id,state)
    {
        var datos = "type="+1+"&"+"id="+id+"&"+"state="+state;
        $.ajax({
            url:"gestionaNoticia.php",
            type:"post",
            data:datos
        }).done(function(data){
            location.reload();
        });
    }

    function Editar(id)
    {
        location.href="EditarNoticia.php?id="+Base64.encode(""+id+"");
    }

    function Eliminar()
    {
        var datos = "type="+2+"&"+"id="+valor;

        $.ajax({
            url:"gestionaNoticia.php",
            type:"post",
            data:datos
        }).done(function(data){

            location.reload();
        });
    }



</script>

</body>
