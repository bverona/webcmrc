<?php
session_start();
if(empty($_SESSION['login']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Colegio Militar Ramón Castilla|| Piura Perú</title>
<link rel="icon" href="../images/icon_ramoncastilla.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

    <link href="../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/metisMenu.css" type="text/css"/>
    <link rel="stylesheet" href="../css/sb-admin-2.css" type="text/css"/>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css"/>

</head>
<body>
<div>
<header>

	    <?php
            require_once '../Clases/clsNavBar.php';
            $objNav = new NavBar();
            echo $objNav->getNavbar2();
        ?>

</header>
<!-- Header -->

<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <form enctype="multipart/form-data" id="procesa" method="post">
                <div class="row">
                    <div class="col-xs-12 ">
                        <p class="text-center">
                        <div class="col-xs-1">

                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" name="titulo" id="titulo"  class="form-control">
                        </div>
                        </p>
                    </div>
                    <div class="col-xs-12 ">
                        <h4><label class="title">Cuerpo</label></h4>
                            <textarea name="body" class="form-control"rows="15" id="texto"></textarea>
                    </div>
                    <div class="col-sm-2-offset col-xs-4 col-sm-3 col-lg-2">
                        <div class="form-group">
                            <a data-toggle="modal" href="#Registar" id="btnregistrar" class="btn btn-success">Registrar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <div class="modal fade" tabindex="-1" role="dialog" id="Registar" style="margin-top: 10%; display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Registrar</h4>
                </div>
                <div class="modal-body">
                    <h4 id="mensaje"></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-info" onclick="Limpiar()">Salir</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

</div>


<div class="bottom-footer">
	<div class="container">
		<p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>

	</div>
</div>

<script type="text/javascript" src="../js/jquery2.1.4.js"></script>
<script type="text/javascript" src="../js/metisMenu.js"></script>
<script type="text/javascript" src="../js/sb-admin-2.js"></script>
<script type="text/javascript" src="../js/Base64.js"></script>
<script type="text/javascript" src="../js/dataTables.min.js"></script>

<script type="text/javascript">

    $(document).ready(function(){

    });

    $(function(){


        $("#btnregistrar").on("click", function(e){

            e.preventDefault();
            var formData= new FormData();
            formData.append("data",$("#titulo").val());
            var datos=$("#titulo").val();

            var data="data="+datos;
            $.ajax({
                url: "datanavbar.php",
                type: "post",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $("#mensaje").html("Enviando datos...");
                   // location.reload();
                }
            })
                .done(function (res) {

                });

        });


    });

    function Limpiar(){
        $("#mensaje").html("");
    }

</script>

</body>
