<?php while ( have_posts() ) : the_post(); ?>
	<div class="ayuda_social_info">
		<div class="ayuda_social_info_titulo">
			<img src="<?php bloginfo(stylesheet_directory); ?>/img/titulo-ayuda-social.svg" alt="AYUDA SOCIAL">
		</div>
		<div class="ayuda_social_info_texto">
			<div>
	            <?php the_content(); ?>
	        </div>	
		</div>
	</div>
	<div class="ayuda_social_img">
		<div class="degradado_img_trayectoria"></div>
		<?php the_post_thumbnail(); ?>
	</div>
<?php
	endwhile;
	wp_reset_query();
?>