<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package education
 */
global $theme_options;
?>


<!doctype html>

<html <?php language_attributes(); ?>>

<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/jcarousel.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<title><?php wp_title('')?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            
                    <a class="navbar-brand" href="<?php echo $theme_options['header-url']; ?>"><?php if($theme_options['header-logo'] != ''): ?>
                      <img src="<?php echo $theme_options['header-logo']['url']; ?>">
              <?php endif; ?></a>
                    
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        
                    <?php //The Arguments of the menu
                    $argsdesk = array(
                          'menu' => 'Main Menu',
                          'container' => '',
                          'container_class' => '',
                          'container_id' => '',
                          'menu_class' => 'nav navbar-nav',
                          'menu_id' => '',
                          'echo' => true,
                          'fallback_cb' => 'wp_page_menu',
                          'before' => '',
                          'after' => '',
                          'link_before' => '',
                          'link_after' => '',
                          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                          'item_spacing' => 'preserve',
                          'depth' => 0,
                          'walker' => '',
                          'theme_location' => 'My Main Menu',
                        );
            //to display the menu
            wp_nav_menu( $argsdesk );
            ?>

                        <!-- <li class="active"><a href="index.html">Home</a></li> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="courses.html">Courses</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
	</header>
</div>