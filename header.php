<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class( 'site-wrapper' ); ?>>

	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'test-theme' ); ?></a>
<header data-bs-theme="dark">

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
        <strong>Demo</strong>
      </a>
    
    </div>
  </div>
</header>
	<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Test task for WordPress developers:</h1>
       <ol>
<li>Create a new local site, use Local WP.</li>



<li>Create a new theme from scratch, use the wd_s starter theme (<a href="https://github.com/WebDevStudios/wd_s"></a><a href="https://github.com/WebDevStudios/wd_s">https://github.com/WebDevStudios/wd_s</a>).</li>



<li>Create a new Git repository and add it to GitHub.</li>



<li>Create a new Gutenberg block (WP Block) with the ACF plugin using the documentation: <a href="https://www.advancedcustomfields.com/resources/blocks/"></a><a href="https://www.advancedcustomfields.com/resources/blocks/">https://www.advancedcustomfields.com/resources/blocks/</a></li>



<li>Share with us the URL of the test site (Live Link in Local WP) and the project repository in GitHub so that we can check your result.</li>
</ol>

       
      </div>
    </div>
  </section>
	<hr />
  <div class="row">
