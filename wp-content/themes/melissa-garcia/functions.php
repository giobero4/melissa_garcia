<?php
/**
 * Enqueue styles.
 */

function agregar_estilos_web() {

 
  wp_enqueue_style( 'estilos', get_template_directory_uri() . '/css/estilos.css', array() );

  wp_deregister_script( 'jquery' );

  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.js');

  wp_enqueue_script( 'jquery' );

  wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js');

}

add_action( 'wp_enqueue_scripts', 'agregar_estilos_web' );

add_theme_support('post-thumbnails');

register_nav_menus( array(
	'menu_melissa_garcia' => 'Menú Melissa García'
) );

// /* TIPO DE ENTRADA PERSONALIZADA TRAYECTORIA */

// function sol_music_cursos_custom_post_type() {
// 	$labels = array(
// 		'name' 					=> 'Trayectoria',
// 		'singular_name' 		=> 'Trayectoria',
// 		'add_new'				=> 'Añadir nuevo curso',
// 		'add_new_item'			=> 'Añadir nuevo curso',
// 		'edit_item'				=> 'Editar curso',
// 		'new_item'				=> 'Nuevo curso',
// 		'view_item'				=> 'Ver curso',
// 		'search_items'			=> 'Buscar cursos',
// 		'not_found'				=> 'No se encontró el curso',
// 		'not_found_in_trash'	=> 'Ningún curso encontrado en la papelera',
// 		'all_items'				=> 'Todos los cursos',
// 		'insert_into_item'		=> 'Insertar imagen principal del curso',
// 		'uploaded_to_this_item'	=> 'Subido como imagen principal del curso',
// 		'featured_image'		=> 'Imagen previa del curso',
// 		'set_featured_image'	=> 'Agregar imagen previa del curso',
// 		'remove_featured_image' => 'Quitar imagen previa del curso',
// 		'use_featured_image'	=> 'Usar como imagen previa del curso',
// 		'menu_name'				=> 'Trayectoria'
// 	);

// 	$args = array(
// 		'public'			=> true,
// 		'has_archive'		=> false,
// 		'labels' 			=> $labels,
// 		'menu_icon'			=> 'dashicons-book',
// 		'show_ui' 			=> true,
// 		'capability_type'	=> 'page',
// 		'hierarchical'		=> true,
// 		'menu_position'		=> 20,
// 		// 'taxonomies' 	 	=> array( 'category' ),
// 		'supports'			=> array( 'title', 'editor', 'page-atributes', 'thumbnail' )
// 	);

// 	register_post_type( 'cursos', $args );
// }

// add_action('init', 'sol_music_cursos_custom_post_type');

?>