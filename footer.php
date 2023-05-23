<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package education
 */

 global $theme_options;
?>



<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
				<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
				<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
				<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
				<?php dynamic_sidebar( 'footer-widget-col-four' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
					<?php dynamic_sidebar( 'footer-widget-col-five' ); ?>
					</div>
				</div>
				<div class="col-lg-6">
				<?php dynamic_sidebar( 'footer-widget-col-six' ); ?>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<?php dynamic_sidebar( 'footer-widget-col-seven' ); ?>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fancybox-media.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/portfolio/jquery.quicksand.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/portfolio/setting.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/animate.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owl-carousel/owl.carousel.js"></script>
<?php wp_footer(); ?>
</body>
</html>