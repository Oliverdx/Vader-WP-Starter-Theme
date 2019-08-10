<?php get_header(); ?>

<main id="main" class="site-main" role="main">
	<div class="content-wrapper">

        <?php if ( have_posts() ): ?>
                <h1 class="page-title-centered">Results for: <strong><?php echo get_search_query(); ?></strong></h1>
        <?php else: ?>
                <h1 class="page-title-centered">Nothing Found, please try again using the search form bellow</h1>
        <?php endif; ?>

		<?php if ( have_posts() ): while ( have_posts() ): the_post(); /* SHOW SEARCH RESULTS */ ?>

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
            
            else: /* IF NOT FOUND SHOW THE SEARCH FORM */ ?>

                <div class="search-no_found">
                <?php get_search_form(); ?>
                </div>

            <?php endif; ?>
	</div>

</main><!-- #main -->

<?php get_footer(); ?>
