<?php
/*
Template Name: Homepage
*/

get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="two-thirds column mobilecolumn">
      <br />
				<h3><?php the_title(); ?></h3>
			<p><?php the_content(); ?></p>
      
      
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="bottom_box mobilehide">
    

     
      
      
      
      
          <?php

// check if the repeater field has rows of data
if( have_rows('blue_box_item') ):

 	// loop through the rows of data
    while ( have_rows('blue_box_item') ) : the_row(); ?>
      
       <li id="blueboxlist">
   <a href="<?php the_sub_field('link'); ?>" rel="##" class="">
      <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="">
   </a> 

   <?php the_sub_field('text'); ?>
</li>

   <?php   

    endwhile;

else :

    // no rows found

endif;

?>
      
      
    </div>
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       <div class="bottom_box2 mobilehide"><center><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/france.png" alt="" height="60px"><br />Annuaire des
titulaires de
la carte
         professionnelle</a></center></div>
		</div>







		
			<div class="one-third column">
      <div class="box">
        <div class="boxleft">
      <?php the_field('sidebar_box_1_image', 'option'); ?>
        </div>
        <div class="boxright">
        <?php the_field('sidebar_box_1_text', 'option'); ?>
        </div>
      </div>
      <div class="box">
       <div class="boxleft">
      <?php the_field('sidebar_box_2_image', 'option'); ?>
        </div>
        <div class="boxright">
        <?php the_field('sidebar_box_2_text', 'option'); ?>
        </div>
      </div>
      <div class="box">
       <div class="boxleft">
      <?php the_field('sidebar_box_3_image', 'option'); ?>
        </div>
        <div class="boxright">
        <?php the_field('sidebar_box_3_text', 'option'); ?>
        </div>
      </div>
      <div class="box boxlast">
       <div class="boxleft">
      <?php the_field('sidebar_box_4_image', 'option'); ?>
        </div>
        <div class="boxright">
        <?php the_field('sidebar_box_4_text', 'option'); ?>
        </div>
      </div>
		</div>


		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>

	


<?php get_footer(); ?>
