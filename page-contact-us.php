<?php
/**
 * Template Name: Contact
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */

get_header(); ?>

<?php
    while ( have_posts() ) : the_post(); ?>

        <div class="contact_page full_width">
            <div class="my_container">
                <?php the_content(); ?>
            </div>
        </div>

    <?php   endwhile; // End of the loop. ?>

<?php get_footer(); ?>