<?php

// Añade la posibilidad de RSS dentro del Sitio Web
add_theme_support('automatic-feed-links');

// Añade funcionalidades de HTML5
add_theme_support('html5', array( 'search-form', 'comment-form', 'comment-list' ));

// Añade soporte de los formatos de entradas
add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));

// Añade la funcionalidad de Soporte de Thumbnails e Imagenes Destacadas
add_theme_support('post-thumbnails');

// Añade recortes de imágenes según las dimensiones que se le otorgen
if (function_exists('add_image_size')) {
	add_image_size('img-1524x800', 1524, 800, true);
    add_image_size('img-300x210', 300, 210, true);
    add_image_size('img-218x200', 218, 200, true);
}


// Función que permite incorporar al tema Hojas de Estilos y Scripts de javascripts
function villadelcine_scripts() {
	// Añade script para mover el form de comentarios
	if (is_singular() && comments_open() && get_option('thread_comments')):
			wp_enqueue_script( 'comment-reply' );
	endif;

	// Añade las Hojas de Estilos
	wp_enqueue_style( 'villadelcine_css1', get_template_directory_uri() . '/style.css', '10000', 'all' );

	// Añade JavaScripts
	wp_enqueue_script( 'villadelcine_searchform', get_template_directory_uri() . '/static/js/jq.search-form.js', array( 'jquery' ), '1', true);
	wp_enqueue_script( 'villadelcine_slider', get_template_directory_uri() . '/static/js/jq.slider.js', array( 'jquery' ), '1', true);
}
add_action( 'wp_enqueue_scripts', 'villadelcine_scripts' );


// Añade menús al tema para personalizar su ubicación
register_nav_menus( 
	array(
			'top'           =>      'Top', 
			'middle'        =>      'Middle',
			'footer_1'      =>      'Footer 1', 
			'footer_2'      =>      'Footer 2', 
	)
);
 
function vdc_post_paging() {
    global $wp_query;
    
    if ($wp_query->max_num_pages < 2)   
        return;
    ?>
    <div class="entries-nav">
    <?php if ( get_previous_posts_link() ) : ?>
        <div class="nav-previous"><?php previous_posts_link('Anterior'); ?></div>
    <?php endif; ?>
    <?php if ( get_next_posts_link() ) : ?>
        <div class="nav-next"><?php next_posts_link('Siguiente'); ?></div>
    <?php endif; ?>
    </div>
    <?php 
}

 ?>
