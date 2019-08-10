<?php get_header(); ?>

<main id="main" class="site-main" role="main">
	<div class="content-wrapper">

		<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

			<div class="single-content">

				<h2 class="content-title">
					<a href="<?php the_permalink(); ?>" rel="next" target="_self" ><?php the_title(); ?></a>
				</h2>
				<div class="single-wrapper">
					<?php the_excerpt(); ?>
				</div> <!-- Content Wrapper -->
				
			</div>

		<?php endwhile;
			the_posts_navigation();
			endif; ?>

	</div>

</main><!-- #main -->

<?php get_footer(); ?>
