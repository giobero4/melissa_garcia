<div class="contenedor_galeria_fotos">
	<div class="bloq_izq">
		<div class="seccion_galeria_fotos_titulo">
			<img src="<?php bloginfo(stylesheet_directory); ?>/img/titulo-galeria-fotos.svg" alt="GALERÍA DE FOTOS">
		</div>
		<ul class="lista_seccion_galerias tipografia_century">
			<?php

			   	$taxonomy = 'galeria';

			   	$terms = get_terms($taxonomy, array(
		           "orderby"    => $term->name,
		           "hide_empty" => false
		       		)
			   	);

			   	$galeriaActiva = 1;
			   	$hierarchy = _get_term_hierarchy($taxonomy);

			       foreach($terms as $term) {

				       if($term->parent) {
				         continue;
				       }

				       if($galeriaActiva == 1) { 
       	   	
			?>

							<li>
								<a href="<?php echo esc_attr(get_term_link($term)); ?>" class="titulo_seccion_galeria seccion_galeria_activa" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a>
							</li>

			<?php

				    	} else {

			?>

							<li>
								<a href="<?php echo esc_attr(get_term_link($term)); ?>" class="titulo_seccion_galeria" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a>
							</li>

			<?php	
				
						}

						$galeriaActiva++; 

				    }

			?>				
		</ul>
	</div>
	<?php get_template_part('template_parts/content','imagenes'); ?>
</div>