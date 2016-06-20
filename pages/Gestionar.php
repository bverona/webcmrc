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


    <!-- Styles -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/revolution.css" media="screen" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link rel="stylesheet" href="../css/myStyle.css" type="text/css" />
    <link href="../css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- DATATABLE STYLE SHEETS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"/>


    <link rel="stylesheet" type="text/css" href="../css/color/color.css" title="color" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="../css/revolution/settings.css">
    <link rel="stylesheet" type="text/css" href="../css/revolution/layers.css">
    <link rel="stylesheet" type="text/css" href="../css/revolution/navigation.css">

</head>
<body>
<div class="theme-layout">
    <header>
        <?php
        require_once '../Clases/clsNavBar.php';
        $objNav = new NavBar();
        echo $objNav->getNavbar2();
        ?>
    </header>
    <!-- Header -->


    <section>

        <div class="container" style="padding-top: 5%">

                <div class="row">
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

        </div>

    </section>


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

    <div class="modal fade" tabindex="-1" role="dialog" id="eliminar"style="margin-top: 10%">
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




<!-- MAIN JQUERY AND MODERANIZER.JS -->
<script type="text/javascript" src="../js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="../js/jquery2.1.4.js"></script>
<script type="text/javascript" src="../js/dataTables.min.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="../js/revolution/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="../js/revolution/jquery.themepunch.revolution.min.js"></script>

<!-- REVOLUTION JS EXTENITONS FILES -->
<script type="text/javascript" src="../js/revolution/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../js/revolution/revolution.extension.video.min.js"></script>

<!-- REVOLUTION JS INITIALIZATION -->
<script type="text/javascript" src="../js/revolution/initialize.js"></script>

<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../js/jquery.poptrox.min.js"></script>
<script type="text/javascript" src="../js/jquery.scrolly.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/isotope-initialize.js"></script>
<script src="../js/enscroll-0.5.2.min.js"></script> <!-- Custom Scroll bar -->
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/Base64.js"></script>
aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
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
        alert(datos);
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
