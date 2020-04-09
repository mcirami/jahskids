<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
	<header id="global_header">
			<div class="top_header full_width">
				<div class="my_container">
                    <div class="sub_heading">
                        <h3><?php the_field('tagline', 'options'); ?></h3>
                    </div>
                    <?php if (have_rows('social_media','options')) : ?>
                        <div class="social">

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
                </div><!-- container -->
			</div>
			<div class="bottom_header full_width">
				<div class="my_container">
                    <div class="full_width">
                        <?php $logo = get_field('logo','options');

                            if (!empty($logo)) :
                        ?>
                                <div class="logo">
                                    <a href="/"><img src="<?php echo $logo['url']; ?>" /></a>
                                </div>

                            <?php endif; ?>
                        <div id="header_menu" class="menu">
                            <nav id="header_nav" role="navigation">
                                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'header_menu' ) ); // remember to assign a menu in the admin to remove the container div ?>
                                <div class="button_wrap">
                                    <a class="button orange" href="<?php the_field('button_link', 'options');?>"><?php the_field('button_text', 'options');?></a>
                                </div>
                            </nav>

                        </div>
                    </div>
                    <a class="mobile_menu_icon" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
				</div><!-- container -->
			</div>
			
		</div>
	</header>
	<div class="wrapper full_width">
        <?php if (!is_home()) :?>
            <div class="page_header full_width">
                <h2><?php echo esc_html( get_the_title() );?></h2>
            </div>
        <?php endif; ?>
