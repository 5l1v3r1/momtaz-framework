<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Momtaz
 * @subpackage Template
 * @since Momtaz Theme 1.0
 */

// Load's directly.
defined( 'ABSPATH' ) OR die();

/*
 * If the visitor has not yet entered the post password if needed
 * will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

/* If no comments are given and comments/pings are closed, return. */
if ( ! have_comments() && ! comments_open() && ! pings_open() ) {
   return;
}

Momtaz_Zones::call( 'comments:before' ) ?>

	<section id="comments" class="comments-area">

		<?php

			// Load the comments-loop template.
			momtaz_template_part( 'comments-loop' );

			// Load the comment form.
			comment_form();

		?>

	</section> <!-- #comments -->

<?php Momtaz_Zones::call( 'comments:after' );
