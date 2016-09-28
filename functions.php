<?php 


	function cargar_css_del_tema(){

		wp_enqueue_style("opensans", "https://fonts.googleapis.com/css?family=Open+Sans");
		wp_enqueue_style("voltaire", "https://fonts.googleapis.com/css?family=Voltaire");
		wp_enqueue_style("normalize", get_stylesheet_directory_uri()."/css/normalize.css");
		wp_enqueue_style("main", get_stylesheet_directory_uri()."/css/main.css");

	}

	add_action("wp_enqueue_scripts", "cargar_css_del_tema");

	add_theme_support("menus");

	function registrar_mis_menus(){

		register_nav_menus( array(

			'menu_cabecera' => 'Menu en Cabecera',
			'menu_pie_pagina' => 'Menu en pie de Pagina'

		));
	}
	add_action(  'init', 'registrar_mis_menus' );


	function cargar_js_del_tema(){
		wp_enqueue_script("jquery", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/core.js");
		wp_enqueue_script("slide", get_stylesheet_directory_uri() . "/js/slide.js");
	}

	add_action("wp_enqueue_scripts", "cargar_js_del_tema" );



	/* ************ Imagenes *************** */
	add_theme_support( 'post-thumbnails' );
	/* ************ Imagenes *************** */


 ?>