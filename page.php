<?php get_header(); ?>
		<div class="page-rules">
			<div class="container">
				<div class="col-xs-12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article>

							<header>

								<h1><?php the_title(); ?></h1>

							</header>

							<?php the_content(); ?>

							<footer>
								<p><?php //the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>
							</footer>

							<?php //comments_template(); ?>

						</article>

					<?php endwhile; else : ?>
					<?php endif; ?>

					<?php //get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
