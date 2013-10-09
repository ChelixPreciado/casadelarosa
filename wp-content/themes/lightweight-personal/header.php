<!doctype html>
<!--[if gte IE 9]>
<html <?php language_attributes(); ?> class="ie ie9">
<![endif]-->
<!--[if IE 8]>
<html <?php language_attributes(); ?> class="ie ie8">
<![endif]-->
<!--[if IE 7]>
<html <?php language_attributes(); ?> class="ie ie7">
<![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?> >
 <!--<![endif]-->
<head>
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title><?php wp_title( '', true, 'right' );?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header><div>
		<div><?php get_search_form(); ?></div>
		<p class="title"><a href="<?php echo esc_url(home_url()); ?>/" name="top"><?php bloginfo('name'); ?></a></p>
		<p class="tagline"><?php bloginfo('description'); ?></p>
		<nav>
			<?php wp_nav_menu( array('fallback_cb' => 'lightweight_personal_page_menu', 'menu' => 'primary', 'depth' => '3', 'theme_location' => 'primary', 'link_before' => '', 'link_after' => '', 'container' => false) ); ?>
			<div class="clear"><!-- --></div>
		</nav>
		
	</div></header>
	

	<section class="content"><div>

		