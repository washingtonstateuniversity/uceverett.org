<?php
/**
 * @package Make
 */

// Header Options
$header_text     = get_theme_mod( 'header-text', false );
$social_links    = ttfmake_get_social_links();
$show_social     = (int) get_theme_mod( 'header-show-social', ttfmake_get_default( 'header-show-social' ) );
$show_search     = (int) get_theme_mod( 'header-show-search', ttfmake_get_default( 'header-show-search' ) );
$subheader_class = ( 1 === $show_social || 1 === $show_search ) ? ' right-content' : '';
$hide_site_title = (int) get_theme_mod( 'hide-site-title', ttfmake_get_default( 'hide-site-title' ) );
$hide_tagline    = (int) get_theme_mod( 'hide-tagline', ttfmake_get_default( 'hide-tagline' ) );
$menu_label      = get_theme_mod( 'navigation-mobile-label', ttfmake_get_default( 'navigation-mobile-label' ) );
?>

<header id="site-header" class="<?php echo esc_attr( ttfmake_get_site_header_class() ); ?>" role="banner">
	<?php // Only show Sub Header if it has content
	if ( ! empty( $header_text ) || 1 === $show_search || ( ! empty( $social_links ) && 1 === $show_social ) ) : ?>
	<div class="header-bar<?php echo esc_attr( $subheader_class ); ?>">
		<div class="container">
			<?php // Search form
			if ( 1 === $show_search ) :
				get_search_form();
			endif; ?>
			<?php // Social links
			ttfmake_maybe_show_social_links( 'header' ); ?>
			<?php // Header text
			if ( ! empty( $header_text ) ) : ?>
				<span class="header-text">
				<?php echo wp_kses_post( $header_text ); ?>
			</span>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="site-header-main">
		<div class="container">
			<div class="site-branding">
				<?php // Tagline
				if ( is_front_page() || is_archive() || is_search() || is_404() && 1 !== $hide_tagline && get_bloginfo( 'description' ) ) : ?>
				<span class="site-description">
					<?php bloginfo( 'description' ); ?>
				</span>
				<?php elseif ( is_singular() ) : ?>
					<span class="site-description"><?php the_title(); ?></span>
				<?php endif; ?>
			</div>


		</div>
	</div>

</header>
<div class="border"></div>

			<div id="site-content" class="site-content">

<nav id="site-navigation" class="site-navigation" role="navigation">
				<span class="menu-toggle"><?php echo esc_html( $menu_label ); ?></span>
				<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'make' ); ?></a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
				) );
				?>
			</nav>

				<div class="container">
