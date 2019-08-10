<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="page-content">

        <div class="content-header">
            <h1 class="content-title"><?php the_title(); ?></h1>
        </div><!-- Page Header -->

        <div class="content-wrapper">

            <?php if ( have_posts() ): while ( have_posts() ):the_post();
            
                    the_content();

            endwhile; endif; ?>

        </div> <!-- Content Wrapper -->

    </div>
</main>

<?php get_footer(); ?>