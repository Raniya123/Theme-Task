<?php
/**
 * Template Name: Scaffolding
 *
 * Template Post Type: page, scaffolding, test_theme_scaffolding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package test-theme
 */

use function ACME\wd_s\main_classes;

get_header(); ?>

	<main id="main" class="<?php echo esc_attr( main_classes( [ 'relative' ] ) ); ?>">

		<?php do_action( 'test_theme_scaffolding_content' ); ?>

	</main><!-- #main -->

<?php get_footer(); ?>
