<?php 

	if(have_posts()) :
		while(have_posts()) :
			the_post();

?>

	<div><?php the_post_thumbnail(); ?></div>

<?php

	endwhile;
	endif;

?>