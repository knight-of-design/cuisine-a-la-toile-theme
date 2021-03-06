<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cuisine_a_la_Toile
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="menu">
			<?php wp_nav_menu( array( 'theme_location' => 'cuisine-footer' ) ); ?>
		</div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cuisine-a-la-toile' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'cuisine-a-la-toile' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php
//If statement
//If the user enters the copyright content they want displayed in the options page, it will appear in this footer
//else copyright 2016 will be posted as a default
			$options = get_option('cuisine_options_settings');
			if (isset($options['cuisine_text_field']) and $options['cuisine_text_field']!="") {
				$copyright = $options['cuisine_text_field'];
			}
			else {
				$copyright = "Theme Cuisine a la Toile &copy; 2016";
			}

			printf( esc_html__( '%1$s', 'cuisine-a-la-toile' ),  $copyright );
                if (wp_is_mobile()){
                    printf( esc_html__( 'Mobile Enabled' ));
                }
            ?>

		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
