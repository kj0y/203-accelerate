<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
        <header class="page-header">
            <h1 id="not-found" class="page-title"><?php _e( "The page you were looking for isn't here."); ?></h1>
        </header>

        <div class="page-wrapper">
            <div id="left-content" class="page-content">
                <h2 id="lost"><?php _e( "It's ok; everyone feels a little lost sometimes."); ?></h2>
                <h3 id="search-desc">Search your soul (or try clicking one of the links in the top right navigation bar)</h3>
            </div>
            <div id="right-content">
                <img src="https://media.giphy.com/media/xg4sZ8hBAJ3qM/giphy.gif">
            </div>

        </div><!-- .page-wrapper -->
    </div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>