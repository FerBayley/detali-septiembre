<?php
/*
Template Name: corbatas
*/
?>


<?php get_header(); ?>

	<section class="CuerpoDetalicorbatas">
	<div class="LogoDetali">
		<a href="http://www.detali.com.ar">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="170px" height="60px" alt="Camisas Detali y Rochas">
		</a>
	</div> <!-- / LogoDetali -->

			<div class="Titulo">
				<h1>Corbatas Detalí</h1>
				<h2>Más información sobre estos productos <a href="mailto:sasteria@detali.com.ar">acá</a></h2>
			</div> <!-- / Titulo -->

			<section class="Galeria">
				<div class="Gal1">					
					<?php query_posts('category_name=corbatas1'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h2 class="Permalink"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<?php endwhile; else: ?>				
						<?php endif; ?>
				</div> <!-- / Gal1 -->

				<div class="Gal2">
					<?php query_posts('category_name=corbatas2'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h2 class="Permalink"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<?php endwhile; else: ?>				
						<?php endif; ?>
				</div> <!-- / Gal2 -->

				<div class="Gal3">
					<?php query_posts('category_name=corbatas3'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h2 class="Permalink"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<?php endwhile; else: ?>				
						<?php endif; ?>
				</div> <!-- / Gal3 -->
			</section> <!-- / Galeria -->

	
	<?php get_footer(); ?>