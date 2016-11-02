<?php get_header(); ?>

<section class="CuerpoDetali">
    <div class="LogoDetali">
        <a href="http://www.detali.com.ar">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="170px" height="60px" alt="Detali Sastreria Italiana">
        </a>
    </div> <!-- / LogoDetali -->

    <div class="Titulo">
        <h1><?php the_title(); ?></h1>
        <h2>Más información sobre estos productos <a href="mailto:sasteria@detali.com.ar">acá</a></h2>
    </div> <!-- / Titulo -->


    <div class="ContenedorSingle">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h2 class="Permalink"><?php the_title(); ?></h2>
          <?php the_content("<span>Leer más</span>"); ?>
          <?php endwhile; else: ?>				
          <?php endif; ?>
	</div> <!-- / ContenedorSingle -->

<?php get_footer(); ?>