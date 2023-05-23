<?php
/**
* Template Name: About
**/
get_header();
if(have_posts())
{
    the_post();
}
?>

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"><?php the_field('title'); ?></h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
					
					<div class="about">
					
						<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3><?php the_field('title_2'); ?></h3>
									<?php the_field('description'); ?>
								</div>
								<a href="#" class="btn btn-color"><?php the_field('button'); ?></a>  
							</div>
						</div>  
						<br>
							
						 <div class="row">
							<div class="col-md-6">
							<?php 
                  $image = get_field('image');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                  <?php endif; ?>
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<?php the_field('description_2'); ?>
								<ul class="list-unstyled">

								<?php  
             
                                   if(have_rows('description_2_points') ):

                                    while( have_rows('description_2_points') ): the_row();
            
                                         ?>

									<li><i class="<?php the_sub_field('class');?>"></i><?php the_sub_field('title');?> </li>

								    <?php endwhile; endif; ?>
									<!-- <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Explicabo deleniti neque aliquid</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Consectetur adipisicing elit</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Quo issimos molest quibusdam temporibus</li> -->
								</ul>
							</div>
						</div>	
						<br/> 
						<hr>
						<br>
						<div class="row">
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span><?php the_field('heading'); ?></span></h3>
								</div>
								<?php the_field('description_3'); ?>
							</div>
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span><?php the_field('heading_2');?></span></h3>
								</div>		
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                                 
								 <?php  
             
                                   if(have_rows('accordian') ):

                                    while(have_rows('accordian') ): the_row();
            
                                         ?>
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#<?php the_sub_field('class');?>">
											<i class="fa fa-angle-right"></i> <?php the_sub_field('heading');?>
										  </a>
										</h4>
									 </div>
									 <div id="<?php the_sub_field('class');?>" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
										  <?php the_sub_field('description');?>
										</div>
									 </div>
								  </div>
								  <?php endwhile; endif; ?>
								  <!-- <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
										  </a>
										</h4>
									 </div>
									 <div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div> -->
								  <!-- <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
										  </a>
										</h4>
									 </div>
									 <div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div> -->
								  <!-- <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
										  </a>
										</h4>
									 </div>
									 <div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div> -->
								</div>
								<!-- Accordion ends -->
								
							</div>
							
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span><?php the_field('our_expertise_heading');?></span></h3>
								</div>		
								<?php  
             
                                   if(have_rows('our_expertise_') ):

                                    while(have_rows('our_expertise_') ): the_row();
            
                                         ?>
								<h6><?php the_sub_field('title');?></h6>
								<div class="progress pb-sm">
								  <!-- White color (progress-bar-white) -->
								  <div class="<?php the_sub_field('class');?>" role="progressbar" aria-valuenow="<?php the_sub_field('value');?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_sub_field('value');?>%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>

									<?php endwhile; endif; ?>
								<!-- <h6>Designing</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div> -->
								<!-- <h6>User Experience</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div> -->
								<!-- <h6>Development</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div> -->
							</div>
							
						</div>
										
						  
						<hr>
						<br>
						<!-- Our Team starts -->
				
						<!-- Heading -->
						<div class="block-heading-six">
							<h3 class="bg-color"><?php the_field('our_team_heading');?></h3>
						</div>
						<br>
						
						<!-- Our team starts -->
						
						<div class="team-six">
							<div class="row">
                                
							<?php  
             
                                   if(have_rows('team') ):

                                    while(have_rows('team') ): the_row();
            
                                         ?>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<?php 
                                           $image = get_sub_field('image');
                                            if( !empty( $image ) ): ?>
                                             <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                               <?php endif; ?>
										<!-- Name -->
										<h4><?php echo get_sub_field('heading');?></h4>
										<span class="deg"><?php echo get_sub_field('role');?></span> 
									</div>
								</div>
								<?php endwhile; endif; ?>
							</div>
						</div>
						
						<!-- Our team ends -->
					  
						
					</div>
									
				</div>
	</section>

    <?php get_footer(); ?>
