<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gogona_ver1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gogona_ver1' ); ?></a>

<!-- <nav>
      <div class="logo">
    <div class="nav-title site-branding">
	<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$gogona_ver1_description = get_bloginfo( 'description', 'display' );
			if ( $gogona_ver1_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $gogona_ver1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
	    
		</div>
  </div>
      <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <ul>
			<li>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'More',
				)
			);
			?>
			</li>
      </ul>
    </nav> -->

	<header class="header">
        <nav class="navbar">
            <h1 class="logo">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<?php
			endif;
			$gogona_ver1_description = get_bloginfo( 'description', 'display' );
			if ( $gogona_ver1_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $gogona_ver1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			</h1>
            <ul class="nav-links">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'More',
				)
			);
			?>
            </ul>
            <div class="hamburger-menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </header>
	<script>
		const navLinks = document.querySelector('.nav-links');
		const burger = document.querySelector('.hamburger-menu');
		const navbar = document.querySelector('.navbar');

		// Event listeners
		burger.addEventListener('click', () => {
			navLinks.classList.toggle('nav-active');
			burger.classList.toggle('bar-change');
		});

		// Sticky navbar
		window.addEventListener('scroll', () => {
			navbar.classList.toggle('sticky', scrollY > 0)
		});
	</script>