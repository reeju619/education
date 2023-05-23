<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package education
 */
get_header();
?>
    
    
    
    
    <!-- Slider -->
    <div id="main-slider" class="flexslider">
            <ul class="slides">

            <?php  
             
             if(have_rows('banner') ):

             while( have_rows('banner') ): the_row();
            
            ?>

              <li>
                <?php 
                  $image = get_sub_field('image');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
                <div class="flex-caption">
                   <div class="item_introtext"> 
					<strong><?php echo get_sub_field('title_1');?></strong>
					<p><?php echo get_sub_field('title_2');?></p> </div>
                </div>
              </li>
              <!-- <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                     <div class="item_introtext"> 
					<strong>School Education</strong>
					<p>Get all courses with on-line content</p> </div>
                </div>
              </li>
              <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/slides/3.jpg" alt="" />
                <div class="flex-caption">
                     <div class="item_introtext"> 
					<strong>Collage Education</strong>
					<p>Awesome Template get it know</p> </div>
                </div>
              </li> -->
            <?php endwhile; endif; ?>
            
            </ul>
        </div>
	<!-- end slider -->
 
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="aligncenter"><h1 class="aligncenter"><?php the_field('course_heading');?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><?php the_field('description');?></div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	
	<div class="container">
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix"> 

        <?php  
             
             if(have_rows('courses') ):

             while( have_rows('courses') ): the_row();
            
            ?>

	 <div class="col-md-3 text-center">
		<span class="<?php echo get_sub_field('span_class');?>"><i class="<?php echo get_sub_field('i_class');?>"></i></span> <div class="box-area">
		<h3><?php echo get_sub_field('header');?></h3> <p><?php echo get_sub_field('description');?></p>
       </div>
	  </div>
		<!-- <div class="col-md-3 text-center"> 
		<span class="icons c2"><i class="fa fa-picture-o"></i></span> <div class="box-area">
		<h3>UI Design</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
       </div>
		</div> -->
		<!-- <div class="col-md-3 text-center"> 
		<span class="icons c3"><i class="fa fa-desktop"></i></span> <div class="box-area">
		<h3>Interaction</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
        </div>
		</div> -->
		<!-- <div class="col-md-3 text-center"> 
		<span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
		<h3>User Experience</h3> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
		</div>
        </div> -->

        <?php endwhile; 
        endif; ?>

		</div>
        </div>
		</div> 
		 

	</div>
	</section>
	<div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                <?php  
             
             if(have_rows('testimonial_') ):

             while( have_rows('testimonial_') ): the_row();
            
            ?>
                    <div class="<?php echo get_sub_field('div_class');?>">
                        <p><?php echo get_sub_field('description');?></p>
                        <p>
                            <b><?php echo get_sub_field('name');?></b>
                        </p>
                    </div>
                    <!-- <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Jaison Warner -</b>
                        </p>
                    </div> -->
                    <!-- <div class="item active">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Tony Antonio -</b>
                        </p>
                    </div> -->
                    <!-- <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Leena Doe -</b>
                        </p>
                    </div> -->

                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="courses">
<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="aligncenter"><h2 class="aligncenter"><?php the_field('heading');?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span><?php the_field('description');?></div>
			</div>
		</div>

           <div class="row">

           <?php  
             
             if(have_rows('heading_course') ):

             while( have_rows('heading_course') ): the_row();
            
            ?>

            <div class="col-md-4">
			<div class="textbox">
                <h3><?php echo get_sub_field('heading');?></h3>
				<p><?php echo get_sub_field('description');?></p>
            </div> </div>
            <!-- <div class="col-md-4">
			<div class="textbox">
                  <h3>Heading Course</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
            </div> </div> -->
			<!-- <div class="col-md-4">
			<div class="textbox">
                  <h3>Heading Course</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
            </div> </div> -->
        
            <?php endwhile;
            endif; ?>

        </div>
		<div class="row">

        <?php  
             
             if(have_rows('heading_course_2') ):

             while( have_rows('heading_course_2') ): the_row();
            
            ?>
            <div class="col-md-4">
			<div class="textbox">
                <h3><?php echo get_sub_field('heading');?></h3>
				<p><?php echo get_sub_field('description');?></p>
            </div> </div>
            <!-- <div class="col-md-4">
			<div class="textbox">
                  <h3>Heading Course</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
            </div> </div> -->
			<!-- <div class="col-md-4">
			<div class="textbox">
                  <h3>Heading Course</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vest sit amet, consec ibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.</p>
            </div> </div> -->

            <?php endwhile;
            endif; ?>

        </div>
</div>
</section>

<?php
  get_footer();

    ?>