<?php
/**
 * Header file for the child theme Palnty from Blankslate WordPress theme.
 */
?>

 <!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">

<header id="header" role="banner">
	<div id="branding">
		<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
			<?php
				if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
				echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
				if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
			?>
		</div>
		<a href="http://planty.local/" class="lien-icone">
        	<img src="/wp-content/uploads/2023/09/Logo.png" alt="Logo" />
    	</a>
	</div>
	<div class="nav-button">
		<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
		</nav>
		<a href="http://planty.local/precommande/" class="page-precommande">
			<button class="command-button" type="button">Commander</button>
		</a>
	</div>
</header>