<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/manifest.json">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo URL_TEMPLATE . '/favicon.png'?>" type="image/icon"/>
	<meta name="theme-color" content="#555">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="site" class="site">

		<header id="site-header">
			<?php
			/* Commenting out the menu, since it's not gonna be used in initial version of the site.

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'components' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			*/
			?>

		</header><!-- #site-header -->

	<div id="content" class="site-content">
