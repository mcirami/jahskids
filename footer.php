<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>
	
		<footer id="global_footer" class="site_footer full_width">
			<div class="my_container">
                <div class="columns_wrap full_width">
                    <div class="column">
                        <div class="column_content">
                            <img src="<?php echo bloginfo('template_url'); ?>/images/logo-alt.png"/>
                        </div>
                    </div>
                    <div class="column footer_menu">
                        <div class="column_content">
                            <h3>Useful Links</h3>
                            <nav role="navigation">
                                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
                            </nav>
                        </div>
                    </div>
                    <div class="column">
                        <div class="column_content">
                            <h3>Stay Connected</h3>
                            <?php if (have_rows('social_media','options')) : ?>
                                <div class="social full_width">

                                    <?php while (have_rows('social_media','options')) : the_row()?>
                                        <?php $icon = get_sub_field('icon', 'options'); ?>
                                        <a target="_blank" href="<?php the_sub_field('link','options'); ?>">
                                            <?php if($icon != '') : ?>
                                                <img class="icon" src="<?php echo $icon['url']; ?>" />
                                            <?php endif; ?>
                                        </a>
                                    <?php endwhile; ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

				<div class="copy full_width">
					<p>&copy; Jah's Kids All Rights Reserved</p>
				</div>
			</div><!-- .container -->
		</footer>
	</div><!-- wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>