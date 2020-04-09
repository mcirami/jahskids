<?php
/**
 * Template Name: Home
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */

get_header(); ?>

	<div class="home_section">
		<?php //$heroImage = get_field('hero_image'); ?>

		<div id="hero_section" class="hero full_width">
			<div class="my_container">
                <?php if (get_field('hero_heading_line_one') != '') : ?>
                    <h3><?php the_field('hero_heading_line_one'); ?></h3>
                <?php endif; ?>
                <?php if (get_field('hero_heading_line_two') != '') : ?>
                    <h2><?php the_field('hero_heading_line_two'); ?></h2>
                <?php endif; ?>
                <?php if (get_field('hero_description') != '') : ?>
                    <p><?php the_field('hero_description', false, false); ?></p>
                <?php endif; ?>

            </div><!-- .container -->
		</div><!-- hero -->

        <?php if (have_rows('full_width_section')) : ?>
            <?php while (have_rows('full_width_section')) : the_row(); ?>
                <div class="one_column_section full_width">
                    <div class="my_container">
                        <?php if (get_sub_field('full_width_heading') != '') : ?>
                            <h3><?php the_sub_field('full_width_heading'); ?></h3>
                        <?php endif; ?>
                        <?php if (get_sub_field('full_width_description') != '') : ?>
                            <p><?php the_sub_field('full_width_description', false, false); ?></p>
                        <?php endif; ?>
                    </div><!-- .container -->
                </div><!-- mission_statement -->
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('box_section')) : ?>
            <?php while (have_rows('box_section')) : the_row(); ?>
                <div class="box_section full_width">
                    <div class="my_container">
                        <div class="columns_wrap">
                            <?php if (have_rows('left_box')) : ?>
                                <?php while (have_rows('left_box')) : the_row(); ?>
                                    <div class="column left_box">
                                        <div class="text_wrap">
                                            <h3><?php the_sub_field('left_box_title'); ?></h3>
                                            <p><?php the_sub_field('left_box_description'); ?></p>
                                            <div class="button_wrap">
                                                <a class="button transparent_green" href="<?php the_sub_field('let_box_button_link'); ?>"><?php the_sub_field('left_box_button_text'); ?></a>
                                            </div>
                                        </div>
                                        <div class="image_wrap">
                                            <?php $image = get_sub_field('left_box_image');
                                            if ($image != '') :
                                                ?>
                                                <img src="<?php echo $image['url']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div><!-- column -->
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if (have_rows('right_box')) : ?>
                                <?php while (have_rows('right_box')) : the_row(); ?>
                                    <div class="column right_box">
                                        <div class="text_wrap">
                                            <h2><?php the_sub_field('right_box_title_line_one'); ?></h2>
                                            <h3><?php the_sub_field('right_box_title_line_two'); ?></h3>
                                            <p><?php the_sub_field('right_box_title_line_three'); ?></p>
                                            <div class="button_wrap">
                                                <a class="button transparent_green" href="<?php the_sub_field('right_box_button_link'); ?>"><?php the_sub_field('right_box_button_text'); ?></a>
                                            </div>
                                        </div>
                                        <div class="image_wrap">
                                            <?php $image = get_sub_field('right_box_image');
                                            if ($image != '') :
                                                ?>
                                                <img src="<?php echo $image['url']; ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div><!-- column -->
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div><!-- columns_wrap -->
                    </div><!-- container -->
                </div><!-- box_section -->
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('full_width_box_section')) : ?>
            <?php while (have_rows('full_width_box_section')) : the_row(); ?>
                <div class="full_width_box_section full_width">
                    <div class="my_container">
                        <div class="content_wrap full_width">
                            <?php if (get_sub_field('box_title')) { ?>
                                <h2><?php the_sub_field('box_title');?></h2>
                            <?php } ?>
                            <?php if (get_sub_field('box_description')) { ?>
                                <p><?php the_sub_field('box_description');?></p>
                            <?php } ?>
                        </div>
                    </div><!-- .container -->
                </div><!-- about_section -->
            <?php endwhile; ?>
        <?php endif; ?>

	</div>

<?php get_footer(); ?>