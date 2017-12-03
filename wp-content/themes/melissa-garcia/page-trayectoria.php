<?php while ( have_posts() ) : the_post(); ?>
	<div class="trayectoria_info">
		<div class="trayectoria_info_titulo">
			<img src="<?php bloginfo(stylesheet_directory); ?>/img/titulo-trayectoria.svg" alt="<?php the_title(); ?>">
		</div>
		<div class="trayectoria_info_texto">		
	        <div>
	            <?php the_content(); ?>
	        </div>	    
		</div>
	</div>
	<div class="trayectoria_img">
		<div class="degradado_img_trayectoria"></div>
		<?php the_post_thumbnail(); ?>
	</div>
<?php
	endwhile;
	wp_reset_query();
?>