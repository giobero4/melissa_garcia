<div class="bloq_der">
	<div class="contenedor_full_img">
		<?php

			$type = 'imagenes';

				$args = array(
				  'post_type' => $type,
				  'post_status' => 'publish',
				  'order' => 'ASC',
				  'posts_per_page' => 1
				  // 'paged' => $paged
				);

				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() )
				  while ($my_query->have_posts()) : $my_query->the_post();

		?>

			<div class="full_img">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php

				 endwhile;
				wp_reset_query();

		?>
	</div>
	<div class="flecha_izquierda">
		<a href="" title="Ir a la izquierda">
			<img src="<?php bloginfo(stylesheet_directory); ?>/img/flecha-slider-izquierda.png" alt="">
		</a>
	</div>
	<div class="contenedor_thumbnails">
		<div class="thumbnails_galeria">
			<?php

				$type = 'imagenes';

				$args = array(
				  'post_type' => $type,
				  'post_status' => 'publish',
				  'order' => 'ASC',
				  'posts_per_page' => -1
				  // 'paged' => $paged
				);

				$imagen = 1;
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() )
				  while ($my_query->have_posts()) : $my_query->the_post();

				  	if($imagen == 1) {

			?>

						<a href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" class="thumbnail_img imagen_activa">
							<?php the_post_thumbnail(); ?>
						</a>

			<?php

				   } else {

		    ?>

			    		<a href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" class="thumbnail_img">
							<?php the_post_thumbnail(); ?>
						</a>

		    <?php

				   }

				 $imagen++;
				 endwhile;
				 wp_reset_query();

			?>
		</div>
	</div>
	<div class="flecha_derecha">
		<a href="" title="Ir a la derecha">
			<img src="<?php bloginfo(stylesheet_directory); ?>/img/flecha-slider-derecha.png" alt="">
		</a>
	</div>
</div>