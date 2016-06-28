<!DOCTYPE html>
<?php

session_start();
$_SESSION['login']='';
session_destroy();

?>
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

    <?php /*
    require_once '../Clases/clsNavBar.php';
    $objNav = new NavBar();
    echo $objNav->getNavbar();
    */
    include "../navbar.php";
    ?>


</header><!-- Header -->

	<div class="container" style="margin-top: 10%; margin-bottom: 5%;">
		<div class="title">
				<span><strong>51 Años</strong> de experiencia</span>
				<h2>ADMISIÓN</h2>
				<!--<p>A continuación le mostramos los servicios educativos y de formación personal, que ofrece el Colegio Militar Ramón Castilla.</p>-->
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 style="text-align: center; font-style: italic;">Te invitamos a formar parte del Glorioso Batallón de Cadetes.</h4><br>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<p style="text-align: justify; font-size: 13px; line-height: 19px;color: #1d1d1d;">Ofrecemos a nuestros cadetes, un conjunto sistemático de conocimientos y actividades debidamente planificadas, orientadas a cultivar los más altos valores cívicos militares; así mismo profundizar su formación científico-humanista, a través de experiencias cognoscitivas y desarrollo de habilidades, destreza de aptitudes que aseguren su óptima formación integral mental física intelectual.<br>
							Contamos con instalaciones tales como: pabellones de aula completamente equipadas con cañones multimedia, laboratorios de informática I y II recientemente equipados con más de 70 computadoras de última tecnología y con acceso a internet.<br>
							Laboratorios de física, química, biología, idiomas, biblioteca, museo de ciencias, comedores, cocina, lavandería, movilidad propia, además de las instalaciones deportivas como un estadio, campo de fulbito, vóley básquetbol, piscina, un excelente y amplio gimnasio para la práctica de físico culturismo. <br>
							La educación es integral para nuestros cadetes, por eso que le brindamos espacios donde desarrollarse físicamente e intelectualmente para ser hombres y mujeres de bien, útiles a la sociedad y a la Patria.</p><br>
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div style="text-align: center;">
								<img src="../images/admisioninicio.jpg" alt="" width="800" style="display: inline-block;">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<h4>Requisitos</h4><br>
							<li>Tener como mínimo  13 hasta los  16 años de edad.</li>
							<li>Haber culminado satisfactoriamente el 2º grado de Educación Secundaria.</li>
							<li>Tener buena salud mental y física.</li>
							<li>Acreditar buena conducta y no haber sido preparado de ninguna I.E. por mal comportamiento.</li>
							<li>Presentar el expediente con los documentos requeridos (la carpeta de inscripción se adquiere en el Colegio).</li>
							<li>Presentar DNI.</li><br>
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<h4>Exámenes</h4><br>
							<div class="practice-area-carousel">
								<div class="practice">
									<div class="practice-img"><img src="../images/examenadm04.jpg" alt="" /></div>
									<div class="practice-detail" style="opacity: 0.8">
										<!--<img src="images/practice1.png" alt="" />
										<i>01</i>-->
										<span style="font-size: 14px; font-weight: bold;">Exámen Médico</span>
										<!--<h3><a href="#" title="">CRIMINAL LAW</a></h3>-->
										<p style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Realizado por el personal médico especializado con la finalidad de verificar el buen estado de salud y funcionamiento orgánico del postulante; este examen es de carácter eliminatorio.</p>
									</div>
								</div><!-- Practice -->
								<div class="practice">
									<div class="practice-img"><img src="../images/examenadm03.jpg" alt="" /></div>
									<div class="practice-detail" style="opacity: 0.8">
										<!--<img src="images/practice2.png" alt="" />
										<i>02</i>-->
										<span style="font-size: 14px; font-weight: bold;">Exámen de Aptitud Física</span>
										<!--<h3><a href="#" title="">DIVORCE LAW</a></h3>-->
										<p style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Tiene por finalidad establecer la capacidad atlética del postulante compatible con el régimen militar especial que se imparte en el Colegio Militar.</p>
									</div>
								</div><!-- Practice -->
								<div class="practice">
									<div class="practice-img"><img src="../images/exam02.jpg" alt="" /></div>
									<div class="practice-detail" style="opacity: 0.8">
										<!--<img src="images/practice2.png" alt="" />
										<i>02</i>-->
										<span style="font-size: 14px; font-weight: bold;">Exámen Psicológico</span>
										<!--<h3><a href="#" title="">DIVORCE LAW</a></h3>-->
										<p style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Es una entrevista personal del postulante con personal profesional en la especialidad que pertenece al Colegio Militar, a fin de que se informe de la capacidad de adaptación del postulante al régimen militar que se le imparte.</p>
									</div>
								</div><!-- Practice -->
								<div class="practice">
									<div class="practice-img"><img src="../images/examenadm02.jpg" alt="" /></div>
									<div class="practice-detail" style="opacity: 0.8">
										<!--<img src="images/practice2.png" alt="" />
										<i>02</i>-->
										<span style="font-size: 14px; font-weight: bold;">Exámen de Conocimientos</span>
										<!--<h3><a href="#" title="">DIVORCE LAW</a></h3>-->
										<p style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Tiene por finalidad recoger información sobre las potencialidades, conocimientos y capacidades que tiene el postulante en las diversas áreas para continuar sus estudios en Tercer Grado de educación secundaria.</p>
									</div>
								</div><!-- Practice -->
								<div class="practice">
									<div class="practice-img"><img src="../images/examenadm05.jpg" alt="" /></div>
									<div class="practice-detail" style="opacity: 0.8">
										<!--<img src="images/practice2.png" alt="" />
										<i>02</i>-->
										<span style="font-size: 14px; font-weight: bold;">Exámen Psicotécnico</span>
										<!--<h3><a href="#" title="">DIVORCE LAW</a></h3>-->
										<p style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Comprende una prueba de habilidad mental para determinar el ingenio intuitivo, capacidad de raciocinio, retención, ordenamiento de establecer contraste y en general de habilidad mental.</p>
									</div>
								</div><!-- Practice -->
								<div class="practice">
									<div class="practice-img"><img src="../images/examenadm01.jpg" alt="" /></div>
									<div class="practice-detail" style="opacity: 0.8">
										<!--<img src="images/practice2.png" alt="" />
										<i>02</i>-->
										<span style="font-size: 14px; font-weight: bold;">Entrevista Personal</span>
										<!--<h3><a href="#" title="">DIVORCE LAW</a></h3>-->
										<p style="font-size: 12px; line-height: 19px; text-align: justify; color: #1d1d1d;">Tiene por finalidad apreciar directa e individualmente el desenvolvimiento personal del postulante en cuanto a: expresión oral, dominio de sí mismo y actitudes (positivas y negativas)</p>
									</div>
								</div><!-- Practice -->
							</div><!-- Practice Area Carousel -->
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<!--<div class="col-md-12">
					<table class="table table-bordered" style="font-size: 10px;">
						<thead>
							<tr>
								<th colspan="3">TERCER AÑO</th>
							</tr>
							<tr>
								<th>N°</th>
								<th>Apellidos y Nombres</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Muñoz Castillo Edson David</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Trillo Morales Luis Jean Paul</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Avila Zavala Silvana Geraldine</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Desposorio Pesantes Maria Jose</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Duran Rosazza Jose Armando</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Chavez Linares Antony Marino</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Tacanga Torres Tamara Anghelina</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Trigoso Benites Cesar Jesus</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>9</td>
								<td>Torre de la Cruz Carlos Eduardo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Cueva Sipiran Cristopher Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>11</td>
								<td>Vasquez Estrada Carlos Edgardo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>12</td>
								<td>Baltodano Tiznado Jorge Antonio</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>13</td>
								<td>Tello Saldaña Angie Marinella</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>14</td>
								<td>Chiclayo Bazan Allinsson Nicolli</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>15</td>
								<td>Vega Narvaez Gimenna Nayeli</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>16</td>
								<td>Cruzado Narro Luis Gustavo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>17</td>
								<td>Vasquez Melgarejo Gianella del Rosario</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>18</td>
								<td>Yupanqui Castillo Moises Emilio</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>19</td>
								<td>Huamanchumo Ipanaque Maed Danna</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>20</td>
								<td>Salvatierra Cardenas Nelson Isac</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>21</td>
								<td>Plasencia Rubio Orlando Andre</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>22</td>
								<td>Ormeño Miranda Brian Jeanpeare</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>23</td>
								<td>Flores Lopez Juan Pablo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>24</td>
								<td>Cordova Chavez Andy Michael</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>25</td>
								<td>Solano Burgos Natalie del Pilar</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>26</td>
								<td>Rodriguez Solis Milagritos</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>27</td>
								<td>Salvatierra Cardenas Ramiro Pablo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>28</td>
								<td>Silva Bacilio Maria Francisca</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>29</td>
								<td>Martinez Villacorta Ricardo Denhilson</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>30</td>
								<td>Pinedo Ruiz Isaac Daniel</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>31</td>
								<td>Aguilar Sosa Jhony Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>32</td>
								<td>Ramirez Quiroz Rosa Maria Isabel</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>33</td>
								<td>Tanoue Vargas Kaori Fabiolla</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>34</td>
								<td>Alvarado Aguirre Oswaldo Jesus</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>35</td>
								<td>Gavidia Pacheco Heymi Isabe</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>36</td>
								<td>Marquina Zavaleta Alisson Michellie</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>37</td>
								<td>Valderrama Layza Pamela Roxana</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>38</td>
								<td>Sanchez Vega Ayrton Alexis</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>39</td>
								<td>Jalk Diaz Piero Aaron</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>40</td>
								<td>Huaman Neyra Alison Nicole Marjori</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>41</td>
								<td>Galvez Valera Fatima Alejandra</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>42</td>
								<td>Castillo Mori Jose Alejandro</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>43</td>
								<td>Aguilar Alva Jack Antoni</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>44</td>
								<td>Vasquez Vasquez Rodrigo Mathias</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>45</td>
								<td>Benites Morales Fabrizio Alessandro</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>46</td>
								<td>Arellano Abanto Jose Alonso</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>47</td>
								<td>Miranda Odar Angimaria Nikol</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>48</td>
								<td>Campana Rojas Joseph Andre</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>49</td>
								<td>Urquiaga Garcia Sergio Alfredo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>50</td>
								<td>De la Cruz Ordas Juliana Carolina</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>51</td>
								<td>Tirado Meza Luis Cesar Freed</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>52</td>
								<td>Del Castillo Peña Dayana Tamara</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>53</td>
								<td>Islado Toribio Danitza Daniela</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>54</td>
								<td>Soto Gutierrez Alissa Briggethe</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>55</td>
								<td>Minchola Rodriguez Rodil Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>56</td>
								<td>Cerna Ortiz Luis Engelberth</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>57</td>
								<td>Burgos Zavaleta Fatima Cristina</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>58</td>
								<td>Riveros Reyes Zenedine Zidane</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>59</td>
								<td>Ysidro Vasquez Piero Fabricio</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>60</td>
								<td>Horna Leonardo Clarissa Jobita</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>61</td>
								<td>Martinez Sirlupu Caleb Jafet</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>62</td>
								<td>Rodriguez Rodriguez Jhoel Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>63</td>
								<td>Salazar Arroyo Marcelo Juanjose</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>64</td>
								<td>Correa Coz Adriana Katherine</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>65</td>
								<td>Ruiz Ventura Jennifer Lucero</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>66</td>
								<td>Vargas Vasquez Jeyser Didier</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>67</td>
								<td>Perez Campos Diego Ferrinson</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>68</td>
								<td>Alcantara Nunjar Alinson Judith</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>69</td>
								<td>Cruzado Castillo Steven Jahir</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>70</td>
								<td>Soles de la Cruz Pedro Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>71</td>
								<td>Bermudez Delgado Daniel David</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>72</td>
								<td>Davalos Torrejon Jair Emanuel</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>73</td>
								<td>Rodriguez Tenorio Diego Orlando</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>74</td>
								<td>Peña Carrillo Ruben Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>75</td>
								<td>Machuca Ruiz Manuel Alberto</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>76</td>
								<td>Neira Ramos Will Smith</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>77</td>
								<td>Medina Alcalde Wilmer Jeffeson</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>78</td>
								<td>Ruiz Armas Carmen Gabriela</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>79</td>
								<td>Vigo Bermudez Santiago Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>80</td>
								<td>Galarreta Briceño Gabriel</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>81</td>
								<td>Sanchez Perez Yarikza Nicoll</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>82</td>
								<td>Romero Toribio Jimena Belen</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>83</td>
								<td>Otianiano Parrera Pedro Alexander</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>84</td>
								<td>De Paz Vasquez Julio Armando</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>85</td>
								<td>Chavez Cruz Kevin Lecht</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>86</td>
								<td>Vera Rojas Piero Andre</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>87</td>
								<td>Monzon Novoa Milagros del Pilar</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>88</td>
								<td>Callacondo Sanchez Dayana Fiorela</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>89</td>
								<td>Toribio Aguilar Maria Luisa</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>90</td>
								<td>Galvez Bazalar Henry Junior</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>91</td>
								<td>Aguilar Chavez Maria Claudia</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>92</td>
								<td>Bejarano Mendez Mirelli Estefani</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>93</td>
								<td>Pérez Rumay Trixi Linda Yubiry</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>94</td>
								<td>Espinola Mariños Stalin Orlando</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>95</td>
								<td>Arias Minchola Cristhian Rafael</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>96</td>
								<td>Chavez Jacobo Abigail Silvana</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>97</td>
								<td>Saldaña Zañartu Rosa Maria</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>98</td>
								<td>Huaman Principe Walter Marcelo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>99</td>
								<td>Moreno Hilario Steysi Jennifer</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>100</td>
								<td>Chiquez Quispe Diana Carolina</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>101</td>
								<td>Acevedo Calderon Renzo Favio</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>102</td>
								<td>Tarrillo Guevara Karla Elizabeth</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>103</td>
								<td>Rodriguez Morales Lesly Xiomara</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>104</td>
								<td>Rodriguez Rodriguez Cristhian Eduardo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>105</td>
								<td>Calvo Alza Silvia Francesca</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>106</td>
								<td>Lescano Rodriguez Juan Sebastian</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>107</td>
								<td>Melgarejo Villegas Renzo Renato</td>
								<td>INGRESANTE</td>
							</tr>
						</tbody>
					</table><br>
					<table class="table table-bordered" style="font-size: 10px;">
						<thead>
							<tr>
								<th colspan="3">CUARTO AÑO</th>
							</tr>
							<tr>
								<th>N°</th>
								<th>Apellidos y Nombres</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Benites Vera Jherson Anthony</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Saavedra Negreros Milagritos Lucia</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Aguirre Gongora Mario Bernabe</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>4</td>
								<td>Ucañan Beltran Ricardo Sebastian</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>5</td>
								<td>Mercado Miñano Mirella Alexandra</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>6</td>
								<td>Quilcate Ramirez Bruno</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>7</td>
								<td>Tamariz Laguna Jersson Pool</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>8</td>
								<td>Chavez Ventura Endy Brandon</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>9</td>
								<td>Muñoz Chavez Marcelo Paolo</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>10</td>
								<td>Yajahuanca Gaytan Lerwin Salvador</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>11</td>
								<td>Vega Saldaña Junior Ivan</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>12</td>
								<td>Cerna Aguilar Alicia Dayana del Pilar</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>13</td>
								<td>Rivero Morillo Luis Jose</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>14</td>
								<td>Avalos Rodriguez Abel Alexavder</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>15</td>
								<td>Barrantes Romero Luis Jesus</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>16</td>
								<td>Sandoval Soriano Mercedes Esthefany</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>17</td>
								<td>Uriol Leon Andria Paulina</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>18</td>
								<td>Cespedes Gamboa Luis Enrique</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>19</td>
								<td>Carrasco Huayas Jean Pierre</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>20</td>
								<td>Vergara Leiva Santos Alberto</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>21</td>
								<td>Vega Vereau Evelin Lizbeth</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>22</td>
								<td>Quiroz Moreno Facundo Gianluca</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>23</td>
								<td>Castillo Coronel Piero Alexandre</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>24</td>
								<td>Segura Lezcano Mauricio Alonso</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>25</td>
								<td>Paredes Valera Helen Aydee</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>26</td>
								<td>Suarez Caceres Angelica Celeste</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>27</td>
								<td>Mendoza Regalado Milagros del Rosario</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>28</td>
								<td>Luciano Luciano Selene Anais</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>28</td>
								<td>Valerio Flores Esteisy Noemi</td>
								<td>INGRESANTE</td>
							</tr>
							<tr>
								<td>30</td>
								<td>Mariños Heras Cristopher Adrian</td>
								<td>INGRESANTE</td>
							</tr>
						</tbody>
					</table>
				</div>-->
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

<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sponsors-carousel">
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
						<div class="sponsor"><img src="http://placehold.it/112x60" alt="" /></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--<footer>
	<div class="block blackish">
	<div class="parallax" data-velocity="-.1" style="background: rgba(0, 0, 0, 0) url(http://placehold.it/1920x900) no-repeat 50% 0;"></div>
		<div class="container">
			<div class="footer-widgets">
				<div class="row">
					<div class="col-md-5">
						<div class="widget">
							<h4 class="widget-title">About Investigate</h4>
							<p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut aliquet. Vivamus in orci aliquam, ac vulputate leo vehicula. Mauris porttitor eros vel sapie hicula. Donec eget ultricies ipsmconsequat rhoncus elit.</p>
						</div>
						<div class="widget">
							<h4 class="widget-title">Sign Up Newsletter</h4>
							<p>Vivamus sagittis et nunc ut aliquet ivamus in orci aliquam.</p>
							<form class="signup">
								<input type="text" placeholder="Enter Email Address" />
								<button>SIGN UP NOW</button>
							</form>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<h4 class="widget-title">Flicker Photos</h4>
							<div class="flicker-photos lightbox">
								<div class="row">
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
									<div class="col-md-4"><a href="http://placehold.it/800x500" title=""><img src="http://placehold.it/80x80" alt="" /></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="widget">
							<h4 class="widget-title">Quick Links</h4>
							<ul>
								<li><a href="#" title="">Vestibulum at magna</a></li>
								<li><a href="#" title="">Sagittis et nunc</a></li>
								<li><a href="#" title="">Porta in orci aliquam</a></li>
								<li><a href="#" title="">Mauris porttitor</a></li>
								<li><a href="#" title="">Eros vel sapien</a></li>
								<li><a href="#" title="">Donec eget ultricies</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<div class="widget">
							<div class="contact-widget">
								<span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span>U</span><span>S</span>
								<a class="btn" href="contact.html" title="">Contact Now</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</footer>-->


<div class="bottom-footer">
	<div class="container">
		<p>Copyright 2016, IEPM "Gran Mariscal Ramón Castilla" - Av. Ramón Castilla 425 - 427 - Teléfono 044 - 464021 Telefax: 044 - 464116. - Trujillo - Perú. All Rights Reserved.</p>
		<!--
		<ul>
			<li><a href="#" title="">Inicio</a></li>
			<li><a href="#" title="">Institucional</a></li>
			<li><a href="#" title="">Administración</a></li>
			<li><a href="#" title="">Noticias</a></li>
			<li><a href="#" title="">Admisión 2016</a></li>
		</ul>-->
	</div>
</div>

<!--<div class="popup">
	<div class="popup-wrapper">
		<div class="popup-inner registration-form">
			<div class="popup-title">
				<span><i class="fa fa-black-tie"></i></span>
				<h5>INVESTIGATE</h5>
				<i>Law Firm PSD Template</i>
			</div>
			<div class="popup-form">
				<h5>Great To See You Here!</h5>
				<i>Let’s set up your account in just a couple of steps.</i>
				<form>
					<div class="row">
						<div class="col-md-12"><input type="text" placeholder="Full Name" /></div>
						<div class="col-md-12"><input type="text" placeholder="Last Name" /></div>
						<div class="col-md-12"><input type="email" placeholder="Email Address" /></div>
						<div class="col-md-12"><input type="text" placeholder="Username" /></div>
						<div class="col-md-12"><p>Letters, numbers and underscores.</p></div>
						<div class="col-md-12"><input type="text" placeholder="Password" /></div>
						<div class="col-md-12"><p>Longer passwords are stronger.</p></div>
						<div class="col-md-12"><input type="checkbox" /> <p>By creating an account you agree to our <a href="#" title="">Terms and Conditions</a> and our <a href="#" title="">Privacy Policy</a>.</p></div>
						<div class="col-md-12"><button type="submit">SIGN UP NOW</button></div>
					</div>
				</form>
			</div>
		</div>
		<div class="popup-inner signin-form">
			<div class="popup-title">
				<span><i class="fa fa-black-tie"></i></span>
				<h5>INVESTIGATE</h5>
				<i>Law Firm PSD Template</i>
			</div>
			<div class="popup-form">
				<h5>Great To Have You Back!</h5>
				<i>Let’s set up your account in just a couple of steps.</i>
				<form>
					<div class="row">
						<div class="col-md-12"><input type="text" placeholder="Full Name" /></div>
						<div class="col-md-12"><input type="email" placeholder="Email Address" /></div>
						<div class="col-md-12"><input type="text" placeholder="Username" /></div>
						<div class="col-md-12"><button type="submit">SIGN IN NOW</button></div>
						<div class="col-md-12"><p>New here? <a href="#" title="">Create an account</a>.</p></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>-->
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
$(document).ready(function(){
    $('.history-wrapper').enscroll({
        showOnHover: false,
        verticalTrackClass: 'track3',
        verticalHandleClass: 'handle3'
    });


	/* ============ Customer Reviews ================*/
	$('.reviews-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:30000,
		smartSpeed:2000,
		loop:true,
		dots:false,
		nav:true,
		margin:10,
		singleItem:true,
		items:1,
		animateIn:"fadeIn",
		animateOut:"fadeOut"
	});


	/* ============ Practice Areas ================*/
	$('.practice-area-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:30000,
		smartSpeed:2000,
		loop:true,
		dots:false,
		nav:false,
		margin:30,
		items:2,
		responsive:{
			1200:{items:2},
			980:{items:2},
			768:{items:2},
			480:{items:1},
			0:{items:1}
		}
	});

	/* ============ Sponsors Carousel ================*/
	$('.sponsors-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:30000,
		smartSpeed:2000,
		loop:true,
		dots:false,
		nav:false,
		margin:10,
		items:6,
		responsive:{
			1200:{items:6},
			980:{items:4},
			768:{items:3},
			480:{items:2},
			0:{items:2}
		}
	});
});
</script>

</body>
