<?php
/**
 * @package Make
 */
?>

				</div>
				<?php if ( ttfmake_get_logo()->has_logo() ) : ?>
				<center>
				<div class="custom-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"></a>
				</div>
				</center>
				<?php endif; ?>
			</div>

<div class="border"></div>

			<?php ttfmake_maybe_show_site_region( 'footer' ); ?>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>
