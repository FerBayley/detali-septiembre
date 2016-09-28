<?php
/*
Template Name: zapatos
*/
?>


<?php get_header(); ?>

	<section class="CuerpoDetalizapatos">
	<div class="LogoDetali">
		<a href="http://www.detali.com.ar">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="170px" height="60px" alt="Camisas Detali y Rochas">
		</a>
	</div> <!-- / LogoDetali -->

			<div class="Titulo">
				<h1>Zapatos Detalí</h1>
				<h2>Más información sobre estos productos <a href="mailto:sasteria@detali.com.ar">acá</a></h2>
			</div> <!-- / Titulo -->

			<section class="Galeria">
				<div class="Gal1">
					<?php query_posts('category_name=zapatos1'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<h2><?php the_title(); ?></h2>
						<?php endwhile; else: ?>				
						<?php endif; ?>
				</div> <!-- / Gal1 -->

				<div class="Gal1">
					<?php query_posts('category_name=zapatos2'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<h2><?php the_title(); ?></h2>
						<?php endwhile; else: ?>				
						<?php endif; ?>
				</div> <!-- / Gal1 -->

				<div class="Gal1">
					<?php query_posts('category_name=zapatos3'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<h2><?php the_title(); ?></h2>
						<?php endwhile; else: ?>				
						<?php endif; ?>
				</div> <!-- / Gal1 -->
			</section> <!-- / Galeria -->

	
	<?php get_footer(); ?>