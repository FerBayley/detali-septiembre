<!DOCTYPE html>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("name"); ?></title>
	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<!-- VIEWPORT -->

	<?php wp_head(); ?>

	<!-- FAVICON -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- FAVICON -->
</head>
<body>

	<section class="Contenedor">

		<?php get_template_part("includes/menu") ?>
		
		<!--MENU-->