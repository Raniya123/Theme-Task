<?php
/**
 * Add a scaffolding nav for easier access.
 *
 * @package test-theme
 */

namespace ACME\wd_s;

/**
 * Add a scaffolding nav for easier access.
 *
 * @author JC Palmes
 */
function print_theme_scaffolding_nav() {
	?>
	<nav class="scaffolding-nav">
		<span><?php echo esc_html__( 'Scroll to:', 'test-theme' ); ?></span>
		<a href="#globals" class="link"><?php echo esc_html__( 'Globals', 'test-theme' ); ?></a>
		<a href="#typography" class="link"><?php echo esc_html__( 'Typography', 'test-theme' ); ?></a>
		<a href="#media" class="link"><?php echo esc_html__( 'Media', 'test-theme' ); ?></a>
		<a href="#icons" class="link"><?php echo esc_html__( 'Icons', 'test-theme' ); ?></a>
		<a href="#buttons" class="link"><?php echo esc_html__( 'Buttons', 'test-theme' ); ?></a>
		<a href="#forms" class="link"><?php echo esc_html__( 'Forms', 'test-theme' ); ?></a>
		<a href="#elements" class="link"><?php echo esc_html__( 'Elements', 'test-theme' ); ?></a>
	</nav><!-- .scaffolding-nav -->
	<?php
}
