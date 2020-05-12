<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>


		<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php $description = get_bloginfo( 'description', 'display' ); ?>

						<img src="" alt=" <?php echo $description; /* WPCS: xss ok. */ ?>">

					</a>



        </div>
        <div id="navbar" class="navbar-collapse collapse">

					<?php wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id' => 'navbar',
							'menu_class' => 'navbar-collapse mainnav',
							'items_wrap' => '<ul id="" class="nav navbar-nav navbar-right">%3$s</ul>' ) );
							?>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	</header><!-- header -->

	<div id="content" class="site-content">
