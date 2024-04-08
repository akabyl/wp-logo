<?php

add_action( 'wp_enqueue_scripts', function() {


	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
  // wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/style.css' );





	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js' );
	wp_enqueue_script( 'ymaps', '//api-maps.yandex.ru/2.1/?apikey=fca28fe7-4591-40f3-a688-8d745f6624b5&lang=ru_RU' );
	wp_enqueue_script( 'tabsSeminar', get_template_directory_uri() . '/assets/js/tabsSeminar.js', array(), '1.0.0', true );
	wp_enqueue_script( 'tabs', get_template_directory_uri() . '/assets/js/tabs.js', array(), '1.0.0', true );
	wp_enqueue_script( 'map', get_template_directory_uri() . '/assets/js/map.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true );
} );



add_theme_support( 'post-thumbnails');
add_theme_support( 'title-tag');
add_theme_support( 'custom-logo');
// add_theme_support( 'post-thumbnails');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

?>