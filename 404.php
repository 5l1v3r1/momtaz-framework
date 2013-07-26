<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Momtaz
 * @subpackage Template
 * @since Momtaz Theme 1.0
 */

add_action( momtaz_format_hook( 'primary_content' ), 'momtaz_404_template_primary_content' );

/**
 * Outputs the 404.php template primary content.
 *
 * @return void
 * @since 1.1
 */
function momtaz_404_template_primary_content() { ?>

    <article id="post-0" class="hentry not-found error-404">

        <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Not found', THEME_TEXTDOMAIN ); ?></h1>
        </header> <!-- .entry-header -->

        <div class="entry-content">
            <p class="error"><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', THEME_TEXTDOMAIN ); ?></p>
            <?php get_search_form(); ?>
        </div> <!-- .entry-content -->

    </article> <!-- .hentry --> <?php

} // end momtaz_404_template_primary_content()

// Load the structure template.
momtaz_context_template( 'structure' );