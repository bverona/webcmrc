<?php

session_start();
if(empty($_SESSION['login']))
{
    session_destroy();
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


<div class="container" style="margin-top: 10%; margin-bottom: 5%;">
			<div class="title">
				<span><strong>51 Años</strong> de experiencia</span>
				<h2>NOTICIAS</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="blog-grid">
						<div class="row" id="cuerpo">
                            <?php
                                require_once '../Clases/clsNotice.php';
                                $objNotice= new Notice();
                                $objNotice->ListNotice();
                            ?>
                        </div>
					</div>
				</div>
			</div>
		</div>

<section>
	<div class="block remove-bottom">
	<div class="parallax still" data-velocity="-.05" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/1920x900) no-repeat 50% 0;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="white-wrapper">
						<div class="title simple">
							<!--<span>We Are Here To Help You. </span>-->
							<h2> <span>Contáctenos</span></h2>
							<p>Nos pondremos en contacto con usted, a la brevedad posible. <strong>I.E. MILITAR RAMON CASTILLA</strong></p>
						</div>
						<div class="contact-form">
							<div id="message"></div>
							<form method="post" action="contactm.php" name="contactform" id="contactform">
								<div class="row">
									<div class="col-md-6"><input name="name" type="text" id="name" placeholder="Nombres y Apellidos" /></div>
									<div class="col-md-6"><input type="text" placeholder="Teléfono" />	</div>
									<div class="col-md-12"><input  name="email" type="text" id="email"  placeholder="Correo Electrónico" /></div>
									<div class="col-md-12"><textarea rows="4" name="comments" id="comments"  placeholder="Mensaje"></textarea></div>
									<button title="" class="button" type="submit" id="submit">ENVIAR MENSAJE</button>
								</div>
							</form>
						</div>
					</div>
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

    jQuery(document).ready(function(){
        jQuery('.img-responsive').each(function(){
            var width = jQuery(this).width();
            var new_width = 340;
            //if (width > new_width){
            //    var height = jQuery(this).height();
                //var calculo = Math.round((100*new_width)/ width); //porcentaje
                //var new_height = Math.round((height*calculo)/100);
                  var new_height = 370;
                jQuery(this).css( {
                    width : new_width+'px',
                    height : new_height+'px'
                } );
            //}
        });
    });

    function refresca(){
        window.location.reload();
    };

    function getNotice(id){

        var dataString = 'id='+id;

        $.ajax({
            type: "POST",
            url: "procesanoticia.php",
            data: dataString,
            cache: false,
            success: function(data){
                 $("#cuerpo").html(" ");
                 $("#cuerpo").html(data);
                $("#rbtn").attr("hidden",false);
            }
        });
    }


</script>

</body>
