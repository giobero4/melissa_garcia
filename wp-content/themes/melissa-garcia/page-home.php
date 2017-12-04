<?php get_header(); ?>
<section class="vista_home sliders_group" id="Inicio">
	<div class="content_slider">
		<div class="main_wrapper slider_controls_flechas">
			<div class="slider_control_izq">
				<a href="" title="Anterior">
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/control-slider-izquierdo.png" alt="Anterior">
				</a>
			</div>
			<div class="slider_control_der">
				<a href="" title="Siguiente">
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/control-slider-derecho.png" alt="Siguiente">
				</a>
			</div>
		</div>
		<div class="slider slider1">
			<div class="fondo_degradado_con_transparencia_home"></div>
			<div class="textura"></div>
			<div class="main_wrapper">
				<div class="slider_elemento elemento_logo">
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/logo_melissa_slider.png" alt="Logo Melissa García">
				</div>
				<div class="slider_elemento elemento_imagen">
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/melissa.png" alt="Melissa García">
				</div>
			</div>
		</div>
		<div class="main_wrapper slider_controls_cuadros">
			<ul>
				<li>
					<a href="" class="control_slider control_slider_activo"></a>
				</li>
				<li>
					<a href="" class="control_slider"></a>
				</li>
				<li>
					<a href="" class="control_slider"></a>
				</li>
				<li>
					<a href="" class="control_slider"></a>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="vista_trayectoria_artista vista_web" id="Trayectoria">
	<div class="fondo_degradado_con_transparencia_trayectoria"></div>
	<div class="textura"></div>
	<div class="main_wrapper agregarMargenesLateralesInternos">
	</div>
</section>
<section class="vista_videos_artista vista_web" id="Videos">
	<div class="fondo_degradado_con_transparencia_trayectoria"></div>
	<div class="textura"></div>
	<div class="main_wrapper">
	</div>
</section>
<section class="vista_musica_artista vista_web" id="Musica">
	<div class="fondo_degradado_con_transparencia_trayectoria"></div>
	<div class="textura"></div>
	<div class="main_wrapper">
	</div>
</section>
<section class="vista_galeria_fotos_artista vista_web" id="Galeria">
	<div class="fondo_degradado_con_transparencia_trayectoria"></div>
	<div class="textura"></div>
	<div class="main_wrapper">
		<div class="contenedor_galeria_fotos">
			<div class="bloq_izq">
				<div class="seccion_galeria_fotos_titulo">
					<img src="<?php bloginfo(stylesheet_directory); ?>/img/titulo-galeria-fotos.svg" alt="GALERÍA DE FOTOS">
				</div>
				<ul class="lista_seccion_galerias tipografia_century">
					<li>
						<a href="" title="Presentaciones" class="titulo_seccion_galeria">Presentaciones</a>
					</li>
					<li>
						<a href="" class="titulo_seccion_galeria seccion_galeria_activa" title="Sesiones de fotos">Sesiones de fotos</a>
					</li>
					<li>
						<a href="" class="titulo_seccion_galeria" title="Ayuda Social">Ayuda Social</a>
					</li>
				</ul>
			</div>
			<div class="bloq_der">
				<div class="contenedor_full_img">
					<div class="full_img">
						<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-8.jpg" alt="Melissa García">
					</div>
				</div>
				<div class="flecha_izquierda">
					<a href="" title="Ir a la izquierda">
						<img src="<?php bloginfo(stylesheet_directory); ?>/img/flecha-slider-izquierda.png" alt="">
					</a>
				</div>
				<div class="contenedor_thumbnails">
					<div class="thumbnails_galeria">
						<a href="" title="" class="thumbnail_img">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-1.jpg" alt="">
						</a>
						<a href="" title="" class="thumbnail_img">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-2.jpg" alt="">
						</a>
						<a href="" title="" class="thumbnail_img">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-3.jpg" alt="">
						</a>
						<a href="" title="" class="thumbnail_img">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-4.jpg" alt="">
						</a>
						<a href="" title="" class="thumbnail_img">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-5.jpg" alt="">
						</a>
						<a href="" title="" class="thumbnail_img">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-6.jpg" alt="">
						</a>
						<a href="" title="" class="thumbnail_img">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-7.jpg" alt="">
						</a>
						<a href="" title="" class="thumbnail_img imagen_activa">
							<img src="<?php bloginfo(stylesheet_directory); ?>/img/img-galeria-8.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="flecha_derecha">
					<a href="" title="Ir a la derecha">
						<img src="<?php bloginfo(stylesheet_directory); ?>/img/flecha-slider-derecha.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="vista_ayuda_social vista_web" id="AyudaSocial">
	<div class="fondo_degradado_con_transparencia_trayectoria"></div>
	<div class="textura"></div>
	<div class="main_wrapper agregarMargenesLateralesInternos">
	</div>
</section>
<div class="fondo_popup_video_youtube">
	<div class="video_youtube">
		<div class="icono_cerrar_popup">
			<img src="<?php bloginfo(stylesheet_directory); ?>/img/icono-cerrar.svg" alt="Cerrar">
		</div>
		<iframe src="" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<?php get_footer(); ?>