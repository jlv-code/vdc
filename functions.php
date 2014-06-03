<?php
// Función que permite incorporar al tema Hojas de Estilos y Scripts de javascripts
function villadelcine_scripts() {
	// Añade script para mover el form de comentarios
	if (is_singular() && comments_open() && get_option('thread_comments')):
			wp_enqueue_script( 'comment-reply' );
	endif;

	// Añade las Hojas de Estilos
	wp_enqueue_style( 'villadelcine_css', get_template_directory_uri() . '/style.css', '10000', 'all' );

	// Añade JavaScripts
	//wp_enqueue_script( 'mippci_js_1', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), MIPPCI, true );
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


?>