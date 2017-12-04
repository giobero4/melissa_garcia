<ul class="lista_videos_artista">
<?php

	$type = 'videos';

	$args = array(
	  'post_type' => $type,
	  'post_status' => 'publish',
	  'order' => 'ASC',
	  'posts_per_page' => 8
	  // 'paged' => $paged
	);

	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() )
	  while ($my_query->have_posts()) : $my_query->the_post();

	  	$url_youtube_video = get_post_meta( $post->ID, '_url_youtube_video_value_key', true );
	  	$autor_video = get_post_meta( $post->ID, '_autor_video_value_key', true );

?>

	<li>
		<a href="<?php echo $url_youtube_video; ?>" class="enlace_video_youtube" title="<?php the_title(); ?>">
			<div class="img_video_artista">
				<div class="fondo_hover">
					<span class="icono_play">
						<img src="<?php bloginfo(stylesheet_directory); ?>/img/icono-play.svg" alt="Reproducir video">
					</span>
				</div>
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="titulo_video_artista tipografia_century">
				<span class="nombre_video"><?php the_title(); ?></span>
				<span class="autor_video"><?php echo $autor_video; ?></span>
			</div>
		</a>
	</li>

<?php

	endwhile;
	wp_reset_query(); 

?>
</ul>