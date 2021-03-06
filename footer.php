		<div class="broker-footer">

			<div class="container">
				<div class="row">

					<div class="col-xs-3 col-xs-offset-1">
						<h4>Mapa de Sitio</h4>
						<div class="broker-mapa">
						<?php wp_nav_menu(array('theme_location'=>'footer-first-col-nav')); ?>
						</div><!--broker-mapa end-->
					</div><!--col-xs-4 end-->

					<?php $the_query4 = new WP_Query( 'pagename=contacto' ); ?>
		                <?php if ( $the_query4->have_posts() ): ?>
		                  <?php while ( $the_query4->have_posts() ) : $the_query4->the_post(); ?>

		                  <?php $direccion=get_post_meta($post->ID, '[Contacto] Dirección', true); ?>
		                  <?php $telefonos=get_post_meta($post->ID, '[Contacto] Teléfonos', true); ?>
		                  <?php $email=get_post_meta($post->ID, '[Contacto] Email', true); ?>

					<div class="col-xs-3 col-xs-offset-1">
						<h4><?php the_title(); ?></h4>
						<p><i class="fa fa-map-marker"></i><?php echo $direccion ?></p>
						<p><i class="fa fa-phone"></i><?php echo $telefonos ?></p>
						<p><i class="fa fa-envelope-o"></i><?php echo $email ?></p>
					</div><!--col-xs-4 end-->

					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>						

					<?php if(is_active_sidebar('redesidebar')): ?>				
					<div class="col-xs-3 col-xs-offset-1">
						<h4>Síguenos en: </h4>						
						<nav class="redes">
							<?php dynamic_sidebar( 'redesidebar' ); ?>
						</nav>
					</div><!--col-xs-4 end-->
					<?php  endif; ?>

				</div><!--row end-->
			</div><!--container end-->
			<div class="credits">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<p> <?php bloginfo('name'); ?>  &copy; <?php the_date( 'Y', false); ?>  Todos los derechos reservados</p>
						</div>
						<?php if(is_active_sidebar('footsidebar')): ?>	
							<div class="col-xs-4">		
								<nav class="footer-legales">
									<?php dynamic_sidebar( 'footsidebar' ); ?>
								</nav>			
							</div>
						<?php  endif; ?>
						<div class="col-xs-4">
							<p>Sitio creado por<a href="http://www.nuevaweb.com.mx/">NuevaWeb</a></p>
						</div>

					</div><!--row end-->
				</div><!--container end-->
			</div><!--credits end-->
			
		</div><!--broker-footer end-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed for Bootstrap -->
		<script src="<?php bloginfo('template_url'); ?>/lib/bootstrap-3.0.3/dist/js/bootstrap.min.js"></script>

		<?php wp_footer(); // wordpress admin-bar functions ?>
</body>
</html>