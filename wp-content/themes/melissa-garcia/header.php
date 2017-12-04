<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Melissa García" />
	<meta name="author" content="Giovanni Benvenutto" />
	<title>Melissa García Becerril ::: Bienvenidos</title>
	<!-- <link rel="stylesheet" href="css/estilos.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script> -->
  	<!-- <script src="js/index.js"></script> -->
</head>
<body>
	<header class="cabecera">
		<div class="main_wrapper">
			<div class="contenedor_busqueda">
				<div class="contenedor_redes_sociales_cabecera tipografia_century">
					<div>
						<a href="https://www.facebook.com/MelissaGarcia.pe/" class="enlaces_redes_sociales" title="Facebook" target="_blank">Facebook</a>
					</div>
					<div>
						<a href="" class="enlaces_redes_sociales" title="Twitter" target="_blank">Twitter</a>
					</div>
					<div>
						<a href="https://www.instagram.com/melissagarciaof/?hl=es" class="enlaces_redes_sociales" title="Instagram" target="_blank">Instagram</a>
					</div>
				</div>
				<form action="" class="form_busqueda">
					<a href="" title="Buscar" class="icono_busqueda">
						<img src="<?php bloginfo(stylesheet_directory); ?>/img/icono-busqueda.svg" alt="Buscar">
					</a>
					<input type="search" class="campo_busqueda tipografia_century">
				</form>
			</div>
			<div class="logo_artista">
				<a href="" class="enlace_inicio" title="INICIO">
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/logo.png" alt="Logo Melissa García">
				</a>
			</div>
			<div class="seccion_menu">
				<div class="contenedor_menu">
					<div class="nombre_artista tipografia_century">
						MELISSA GARCÍA
					</div>
					<nav class="menu_principal tipografia_century">
						<?php wp_nav_menu(); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>