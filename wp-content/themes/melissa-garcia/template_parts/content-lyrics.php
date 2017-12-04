<div class="lyrics_canciones tipografia_century">
	<?php 

		$type2 = 'musica';

		$args2 = array(
		  'post_type' => $type2,
		  'post_status' => 'publish',
		  'order' => 'ASC',
		  'posts_per_page' => 6
		  // 'paged' => $paged
		);

		$my_query2 = null;
		$my_query2 = new WP_Query($args2);
		if( $my_query2->have_posts() )
		  while ($my_query2->have_posts()) : $my_query2->the_post();

	?>
	<div data-letra-cancion="<?php the_title(); ?>">
		<div class="titulo_lyric">
			<?php the_title(); ?>
		</div>
		<div class="texto_lyric">
			<div>
				<?php 

					$lyric_contenido = get_post_meta( $post->ID, '_lyric_editor_value_key', true);

					echo $lyric_contenido;

				?>
			</div>
		</div>
	</div>
	<?php
		endwhile;
		wp_reset_query();
	?>
</div>
