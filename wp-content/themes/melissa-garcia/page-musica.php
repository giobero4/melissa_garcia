<div class="seccion_musica_lista_canciones">
	<div class="seccion_musica_titulo">
		<img src="<?php bloginfo(stylesheet_directory); ?>/img/titulo-musica.svg" alt="MÚSICA">
	</div>
	<ul class="lista_canciones">
	<?php

		$type = 'musica';

		$args = array(
		  'post_type' => $type,
		  'post_status' => 'publish',
		  'order' => 'ASC',
		  'posts_per_page' => 6
		  // 'paged' => $paged
		);

		$numeroCancion = 1;
		$my_query = null;
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() )
		  while ($my_query->have_posts()) : $my_query->the_post();

		  	$url_soundcloud = get_post_meta( $post->ID, '_url_soundcloud_value_key', true );

		  	if($numeroCancion == 1) {

	?>

				<li>
					<a href="<?php echo $url_soundcloud; ?>" title="<?php the_title(); ?>" class="titulo_cancion titulo_cancion_activo tipografia_century">
						<?php echo $numeroCancion . '.-'; ?>
						<?php the_title(); ?>
					</a>
				</li>

	<?php

			} else {

	?>

				<li>
					<a href="<?php echo $url_soundcloud; ?>" title="<?php the_title(); ?>" class="titulo_cancion tipografia_century">
						<?php echo $numeroCancion . '.-'; ?>
						<?php the_title(); ?>
					</a>
				</li>
	
	<?php

			}

			$numeroCancion++;
			endwhile;
			wp_reset_query(); 

	?>
	</ul>
</div>
<?php get_template_part('template_parts/content','lyrics'); ?>
<div class="widget_soundcloud">
	<iframe class="reproductor_soundcloud" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/319945682&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></iframe>
</div>