	<section class="Redes">
			<ul>
				<li>
					<a href="https://www.facebook.com/SastreriaDetali" target="_blanck">
						<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="Facebook">
					</a>
				</li>
				<li>
					<a href="https://twitter.com/DetaliSastreria" target="_blanck">
						<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="Twitter">
					</a>
				</li>
				<li>
					<a href="https://www.pinterest.com/detali" target="_blanck">
						<img src="<?php echo get_template_directory_uri(); ?>/images/pinterest.png" alt="Pinterest">
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/detalisastreria/" target="_blanck">
						<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram">
					</a>
				</li>
				<li>
					<a href="https://ar.linkedin.com/in/detali" target="_blanck">
						<img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="Linkedin">
					</a>
				</li>
			</ul>
		</section><!-- / Redes -->

		<p class="TextoPie">
			Todo los derechos reservados <?php echo date("Y"); ?> - Av Roque Saenz Peña 615 - Piso 5 Oficina 512 - Tel: 4 328 9656 - <a href="mailto:sastreria@detali.com.ar">sastreria@detali.com.ar</a>
		</p> <!-- / TextoPie -->
	</section> <!-- / CuerpoDetali -->
		
		<!--MENU FOOTER-->
		<?php get_template_part("includes/menu", "footer"); ?>
	</section> <!-- / Contenedor -->

	<?php wp_footer(); ?>

</body>
</html>