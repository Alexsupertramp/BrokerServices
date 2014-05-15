<div class="broker-footer">

	<div class="container">
		<div class="row">

			<div class="col-xs-4">
				<h4>Mapa de Sitio</h4>
				<div class="broker-mapa">
				<?php wp_nav_menu(array('theme_location'=>'footer')); ?>
				</div><!--broker-mapa end-->
			</div><!--col-xs-4 end-->

			<?php $the_query4 = new WP_Query( 'pagename=contacto-2' ); ?>
                <?php if ( $the_query4->have_posts() ): ?>
                  <?php while ( $the_query4->have_posts() ) : $the_query4->the_post(); ?>

                  <?php $direccion=get_post_meta($post->ID, '[Contacto] Dirección', true); ?>
                  <?php $telefonos=get_post_meta($post->ID, '[Contacto] Teléfonos', true); ?>
                  <?php $email=get_post_meta($post->ID, '[Contacto] Email', true); ?>

			<div class="col-xs-4">
				<h4><?php the_title(); ?></h4>
				<p><i class="fa fa-map-marker"></i><?php echo $direccion ?></p>
				<p><i class="fa fa-phone"></i><?php echo $telefonos ?></p>
				<p><i class="fa fa-envelope-o"></i><?php echo $email ?></p>
			</div><!--col-xs-4 end-->

				

			<div class="col-xs-4">
				<h4>Síguenos en: </h4>
				<?php if(is_active_sidebar('sidebar1')): ?>				
					<ul class="redes">
						<?php dynamic_sidebar( 'sidebar1' ); ?>
					</ul>
				<?php  endif; ?>
			</div><!--col-xs-4 end-->

			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

		</div><!--row end-->
	</div><!--container end-->
	<div class="credits">
		<div class="container">
			<div class="row">
				<div class="col-xs-4"><p>Sitio creado por&nbsp;&nbsp;<a href="#">NuevaWeb</a></p></div>
				<div class="col-xs-2">
					<a href="#">Aviso de privacidad</a> 
				</div>
				<div class="col-xs-2">
					<p> &copy; 2014 Todos los derechos reservados</p>
				</div>
				<div class="col-xs-4">
					<div class="custom-a">						
						<a href="">FORMATOS</a>								
					</div>
				</div>

			</div><!--row end-->
		</div><!--container end-->
	</div><!--credits end-->
	
</div><!--broker-footer end-->

	<?php wp_footer(); ?>
	</body>
</html>