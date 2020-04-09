<?php
/**
 * Template Name: Media
 *
 * The template for displaying home page.
 *
 *
 * @package boiler
 */

get_header(); ?>

    <div class="media_page full_width">
        <div class="my_container">
            <nav class="nav nav-tabs" id="myTab" role="tablist">
                <a class="nav-item nav-link active" id="nav-videos-tab" data-toggle="tab" href="#nav-videos" role="tab" aria-controls="nav-videos" aria-selected="true">Videos</a>
                <a class="nav-item nav-link" id="nav-photos-tab" data-toggle="tab" href="#nav-photos" role="tab" aria-controls="nav-photos" aria-selected="false">Photos</a>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-videos" role="tabpanel" aria-labelledby="nav-videos-tab">
                    <div class="full_row full_width">
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row full_width">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full_row full_width">
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row full_width">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- tab-pane -->
                <div class="tab-pane fade" id="nav-photos" role="tabpanel" aria-labelledby="nav-photos-tab">
                    <div class="full_row full_width">
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full_row full_width">
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="video_wrap">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/video-placeholder.jpg"/>
                            </div>
                            <h3>Words from a few sponsors...</h3>
                            <div class="full_row full_width">
                                <p>December 14, 2016</p>
                                <div class="social">
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-like.png"/></a>
                                    <a href=""><img src="<?php echo bloginfo('template_url'); ?>/images/icon-fb-share.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- tab-content -->
        </div><!-- container -->
    </div><!-- media_page -->



<?php get_footer(); ?>
