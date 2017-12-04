<?php
/**
 * Se agregan estilos y scripts del tema.
 */

function agregar_estilos_y_scripts_web() {
 
  wp_enqueue_style( 'estilos', get_template_directory_uri() . '/css/estilos.css', array() );

  wp_deregister_script( 'jquery' );

  wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.js');

  wp_enqueue_script( 'jquery' );

  wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js');

}

add_action( 'wp_enqueue_scripts', 'agregar_estilos_y_scripts_web' );

add_theme_support('post-thumbnails');

register_nav_menus( array(
	'menu_melissa_garcia' => 'Menú Melissa García'
) );


/* TIPO DE ENTRADA PERSONALIZADA VIDEOS */

function melissa_garcia_videos_custom_post_type() {
	$labels = array(
		'name' 					=> 'Videos',
		'singular_name' 		=> 'Video',
		'add_new'				=> 'Añadir nuevo video',
		'add_new_item'			=> 'Añadir nuevo video',
		'edit_item'				=> 'Editar video',
		'new_item'				=> 'Nuevo video',
		'view_item'				=> 'Ver video',
		'search_items'			=> 'Buscar videos',
		'not_found'				=> 'No se encontró el video',
		'not_found_in_trash'	=> 'Ningún video encontrado en la papelera',
		'all_items'				=> 'Todos los videos',
		'insert_into_item'		=> 'Insertar imagen principal del video',
		'uploaded_to_this_item'	=> 'Subido como imagen principal del video',
		'featured_image'		=> 'Imagen previa del video',
		'set_featured_image'	=> 'Agregar imagen previa del video',
		'remove_featured_image' => 'Quitar imagen previa del video',
		'use_featured_image'	=> 'Usar como imagen previa del video',
		'menu_name'				=> 'Videos'
	);

	$args = array(
		'public'			=> true,
		'has_archive'		=> false,
		'labels' 			=> $labels,
		'menu_icon'			=> 'dashicons-video-alt3',
		'show_ui' 			=> true,
		'capability_type'	=> 'page',
		'hierarchical'		=> true,
		'menu_position'		=> 20,
		'supports'			=> array( 'title','thumbnail' )
	);

	register_post_type( 'videos', $args );
}

add_action('init', 'melissa_garcia_videos_custom_post_type');

/* METABOXES PARA TIPO DE ENTRADA PERSONALIZADA VIDEOS */

/* METABOX AUTOR VIDEO */

function agregar_meta_personalizado_autor_video(){

	add_meta_box( 'autor_video', 'Autor del video', 'autor_del_video_callback', 'videos', 'normal', 'default');

}

add_action('add_meta_boxes', 'agregar_meta_personalizado_autor_video');


function autor_del_video_callback($post){

	wp_nonce_field( 'guardar_autor_video','campo_autor_video');
	$autor_video = get_post_meta( $post->ID, '_autor_video_value_key', true );
	echo '<input type="text" id="melissagarcia_campo_autor_video" name="melissagarcia_campo_autor_video" value="'. esc_attr($autor_video) . '" size="25" />';
}

function guardar_autor_video( $post_id ) {

	if (! isset( $_POST['campo_autor_video'] ) ) {
		return;
	}

	if(! wp_verify_nonce( $_POST['campo_autor_video'], 'guardar_autor_video' ) ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return;
	}

	if( ! current_user_can('edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['melissagarcia_campo_autor_video'] ) ) {
		return;
	}

	$mi_campo_autor_video = sanitize_text_field( $_POST['melissagarcia_campo_autor_video'] );

	update_post_meta( $post_id, '_autor_video_value_key', $mi_campo_autor_video );

}

add_action('save_post', 'guardar_autor_video');


/* METABOX URL YOUTUBE VIDEO */

function agregar_meta_personalizado_url_youtube_video(){

	add_meta_box( 'url_youtube_video', 'URL Youtube del video', 'url_youtube_video_callback', 'videos', 'normal', 'default');

}

add_action('add_meta_boxes', 'agregar_meta_personalizado_url_youtube_video');


function url_youtube_video_callback($post){

	wp_nonce_field( 'guardar_url_youtube_video','campo_url_youtube_video');
	$url_youtube_video = get_post_meta( $post->ID, '_url_youtube_video_value_key', true );
	echo '<input type="text" id="melissagarcia_campo_url_youtube_video" name="melissagarcia_campo_url_youtube_video" value="'. esc_attr($url_youtube_video) . '" size="75" />';
}

function guardar_url_youtube_video( $post_id ) {

	if (! isset( $_POST['campo_url_youtube_video'] ) ) {
		return;
	}

	if(! wp_verify_nonce( $_POST['campo_url_youtube_video'], 'guardar_url_youtube_video' ) ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return;
	}

	if( ! current_user_can('edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['melissagarcia_campo_url_youtube_video'] ) ) {
		return;
	}

	$mi_campo_url_youtube_video = sanitize_text_field( $_POST['melissagarcia_campo_url_youtube_video'] );

	update_post_meta( $post_id, '_url_youtube_video_value_key', $mi_campo_url_youtube_video );

}

add_action('save_post', 'guardar_url_youtube_video');

/* TIPO DE ENTRADA PERSONALIZADA MÚSICA */

function melissa_garcia_musica_custom_post_type() {
	$labels = array(
		'name' 					=> 'Música',
		'singular_name' 		=> 'Música',
		'add_new'				=> 'Añadir nueva canción',
		'add_new_item'			=> 'Añadir nueva canción',
		'edit_item'				=> 'Editar canción',
		'new_item'				=> 'Nueva canción',
		'view_item'				=> 'Ver canción',
		'search_items'			=> 'Buscar canciones',
		'not_found'				=> 'No se encontró la canción',
		'not_found_in_trash'	=> 'Ninguna canción encontrada en la papelera',
		'all_items'				=> 'Todas las canciones',
		'insert_into_item'		=> 'Insertar imagen principal de la canción',
		'uploaded_to_this_item'	=> 'Subido como imagen principal de la canción',
		'featured_image'		=> 'Imagen previa de la canción',
		'set_featured_image'	=> 'Agregar imagen previa de la canción',
		'remove_featured_image' => 'Quitar imagen previa de la canción',
		'use_featured_image'	=> 'Usar como imagen previa de la canción',
		'menu_name'				=> 'Música'
	);

	$args = array(
		'public'			=> true,
		'has_archive'		=> false,
		'labels' 			=> $labels,
		'menu_icon'			=> 'dashicons-format-audio',
		'show_ui' 			=> true,
		'capability_type'	=> 'page',
		'hierarchical'		=> true,
		'menu_position'		=> 21,
		'supports'			=> array( 'title' )
	);

	register_post_type( 'musica', $args );
}

add_action('init', 'melissa_garcia_musica_custom_post_type');

/* METABOXES PARA TIPO DE ENTRADA PERSONALIZADA MÚSICA */

/* METABOX URL SOUNDCLOUD */

function agregar_meta_personalizado_url_souncloud(){

	add_meta_box( 'url_soundcloud', 'URL Soundcloud', 'url_soundcloud_callback', 'musica', 'normal', 'default');

}

add_action('add_meta_boxes', 'agregar_meta_personalizado_url_souncloud');


function url_soundcloud_callback($post){

	wp_nonce_field( 'guardar_url_soundcloud','campo_url_soundcloud');
	$url_soundcloud = get_post_meta( $post->ID, '_url_soundcloud_value_key', true );
	echo '<input type="text" id="melissagarcia_campo_url_soundcloud" name="melissagarcia_campo_url_soundcloud" value="'. esc_attr($url_soundcloud) . '" size="130" />';
}

function guardar_url_soundcloud( $post_id ) {

	if (! isset( $_POST['campo_url_soundcloud'] ) ) {
		return;
	}

	if(! wp_verify_nonce( $_POST['campo_url_soundcloud'], 'guardar_url_soundcloud' ) ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return;
	}

	if( ! current_user_can('edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['melissagarcia_campo_url_soundcloud'] ) ) {
		return;
	}

	$mi_campo_url_soundcloud = $_POST['melissagarcia_campo_url_soundcloud'];

	update_post_meta( $post_id, '_url_soundcloud_value_key', $mi_campo_url_soundcloud );

}

add_action('save_post', 'guardar_url_soundcloud');


/* METABOX LYRIC DE LA CANCIÓN */

function agregar_meta_personalizado_lyrics() {

	add_meta_box('lyrics', 'Lyric de la canción' , 'lyrics_callback', 'musica', 'normal', 'default');

}

add_action('add_meta_boxes', 'agregar_meta_personalizado_lyrics');

function lyrics_callback( $post) {
	wp_nonce_field( 'guardar_lyrics', 'campo_lyrics' );
	$lyric_contenido = get_post_meta( $post->ID, '_lyric_editor_value_key', true );
	echo '<div class="content-row">' . wp_editor( $lyric_contenido, 'lyric_contenido', array(
		    'wpautop'       => false,
		    'textarea_name' => 'lyric_contenido',
		    'textarea_rows' => 10
		) ) . '</div>';
}

function guardar_lyrics( $post_id ) {

	if (! isset( $_POST['campo_lyrics'] ) ) {
		return;
	}

	if(! wp_verify_nonce( $_POST['campo_lyrics'], 'guardar_lyrics' ) ) {
		return;
	}

	if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
		return;
	}

	if( ! current_user_can('edit_post', $post_id ) ) {
		return;
	}

	if( ! isset( $_POST['lyric_contenido'] ) ) {
		return;
	}

	$mi_campo_lyric = $_POST['lyric_contenido'];

	update_post_meta( $post_id, '_lyric_editor_value_key', $mi_campo_lyric );
}

add_action('save_post', 'guardar_lyrics');

?>