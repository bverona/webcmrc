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

    <!-- DATATABLE STYLE SHEETS
    <link rel="stylesheet" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
    -->

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
            <div class="block remove-gap">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="dataTables_length">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="dataTables_filter">

                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-xs-12 col-md-9">
                    <table class="table table-bordered" id="tabla">
                        <thead>
                        <th class="text-center">N°</th>
                        <th class="text-center">Título</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                        </thead>
                        <tbody id="tbody">
                        <tr>
                            <td  class="text-center">#</td>
                            <td class="text-center">title</td>
                            <td class="text-center">date</td>
                            <td class="text-center">state</td>
                            <td class="text-center">editado</td>
                            <td class="text-center">eliminado</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            </div>
        </div>

    </section>
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').dataTable();
    });

    function isImage(extension)
    {
        switch(extension.toLowerCase())
        {
            case 'jpg': case 'gif': case 'png': case 'jpeg':
            return true;
            break;
            default:
                return false;
                break;
        }
    }
    $(':file').change(function()
    {
        var fileExtension = "";

        //obtenemos un array con los datos del archivo
        var file = $("#imgp")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;

        if(!isImage(fileExtension)){
            alert('Solo debe Seleccionar imágenes');
            $("#imgp").val('');
        }

        //obtenemos un array con los datos del archivo
        var file = $("#imgg")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        var fileType = file.type;
        //mensaje con la información del archivo

        if(!isImage(fileExtension)){
            alert('Solo debe Seleccionar imágenes');
            $("#imgg").val('');
        }

    });

    $(function(){

        $("#btnsend").on("click", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("procesa"));
            //formData.append("dato", "valor");
            //formData.append(f.attr("imgp"), $(this)[0].files[0]);
            //formData.append(f.attr("imgg"), $(this)[0].files[0]);



            $.ajax({
                url: "procesa.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
                .done(function (res) {
                    $('#titulo').val('');
                    $('#imgp').val('');
                    $('#imgg').val('');
                    $('#texto').val('');

                });




        });





    });
</script>

</body>
