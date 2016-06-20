<?php

session_start();
$_SESSION['login']='';
session_destroy();

?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<link rel="stylesheet" type="text/css" href="../css/color/color.css" title="color" />

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="../css/revolution/settings.css">
<link rel="stylesheet" type="text/css" href="../css/revolution/layers.css">
<link rel="stylesheet" type="text/css" href="../css/revolution/navigation.css">
<link rel="stylesheet" type="text/css" href="../assets/cover.css">

</head>
<body>
<div class="theme-layout">
<header>
    <?php
            require_once '../Clases/clsNavBar.php';
            $objNav = new NavBar();
            echo $objNav->getNavbar();
    ?>

</header>
<!-- Header -->
    <div class="site-wrapper">

        <div class="site-wrapper-inner">
            <br/>
            <div class="cover-container" id="box">
                <form action="Logueo.php">
                    <div class="row">
                        <div class="col-xs-12 col-md-offset-3 col-md-4">
                            <input class="form-control" type="text" name="user" placeholder="Usuario" id="username" />
                        </div>
                    </div>
                    <div class="row">
                        <br/>
                        <div class="col-xs-12 col-md-offset-3 col-md-4">
                            <input class="form-control" name="pass" type="password" placeholder="Contraseña" id="pass"/>
                        </div>
                    </div>
                    <div class="row"><br/>
                        <div class="col-xs-12 col-md-offset-3 col-md-4">
                            <input class="btn btn-success btn-block" type="button" id="login" value="Ingresar"/>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    </div>


<div class="bottom-footer">
	<div class="container">
		<p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>

	</div>
</div>


</div>




<!-- MAIN JQUERY AND MODERANIZER.JS -->
<script type="text/javascript" src="../js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="../js/jquery2.1.4.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>

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
<script type="text/javascript" src="../js/md5.pack.js"></script>

<script type="text/javascript">
$(document).ready(function()
{

    $('#login').click(function()
    {

        var username=$("#username").val();
        var pass=$("#pass").val();
        var dataString = 'username='+username+'&pass='+md5(pass);
        if($.trim(username).length>0 && $.trim(pass).length>0)
        {
            $.ajax({
                type: "POST",
                url: "loguear.php",
                data: dataString,
                cache: false,
                beforeSend: function(){ $("#login").val('Connecting...');},
                success: function(data){

                    if(data==true)
                    {
                        //$("body").load("home.php").hide().fadeIn(1500).delay(6000);
                        //or
                        window.location.href = "Gestionar.php";
                    }
                    else
                    {
                        //Shake animation effect.
                        alert("Error al ingresar Usuario");

                        $('#login').val("Ingresar")
                        $("#username").val("");
                        $("#pass").val("");
                    }
                }
            });

        }
        return false;
    });

});

</script>

</body>
