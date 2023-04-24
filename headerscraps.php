
<header id="masthead" class="site-header">
  <!-- start of the .site-branding -->
		<div class="site-branding">
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
  <!-- end of the .site-branding -->
  
  <!-- start of the .site-navigation -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="More" aria-expanded="false"><?php esc_html_e( 'More', 'gogona_ver1' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'More',
				)
			);
			?>
		</nav><!-- #site-navigation -->
    
	</header><!-- #masthead -->