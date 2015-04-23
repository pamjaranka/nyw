<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap_col_15.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>

<div class="container">
	<header>
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-4 search-block">
				<div class="search-icon" id="searchitem"></div>
				<div class="search-input"><?php get_template_part( 'searchform', get_post_format() ); ?></div>
				
			</div>
			<div class="col-md-offset-8 col-md-2 col-sm-offset-4 col-sm-4 col-xs-8 social-icons">
				<a href="" class="social-icons-item twiter"></a>
				<a href="" class="social-icons-item facebook"></a>
				<a href="" class="social-icons-item vimeo"></a>
			</div>
			<div class="col-md-offset-2 col-md-8 col-sm-12 logo-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="The New York World"></div>
		</div>
	</header>
	<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div>
				<?php
					wp_nav_menu( array(
						'menu_class'     => 'nav',
						'theme_location' => 'primary',
					) );
				?>
				</div>
			</nav>
		<?php endif; ?>
</div>






