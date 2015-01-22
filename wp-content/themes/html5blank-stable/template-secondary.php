<?php
/*
Template Name: Second level
*/

get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="three columns">
     <div class="secondarynav">
       <?php print cssmenumaker_pro_print_menu(29); ?>
      <!--<span class="nav2">Stuff</span>
        <span class="nav2a">Stuff</span>
       <span class="nav2a">Stuff</span>
       <span class="nav2a">Stuff</span>
       <span class="nav2a">Stuff</span>
       <span class="nav2">Stuff</span>
       <span class="nav2">Stuff</span>
       <span class="nav2">Stuff</span>
       <span class="nav2">Stuff</span>-->
     </div>
  
 
    
     <br />  <br />
     
     
     
		</div>   
       <div class="seven columns padding mobilecolumn">
  <h1>Qui sommes-nous?</h1>
         <p><strong>Donec varius dolor sit amet odio laoreet varius. Donec aliquet lectus elit</strong></p>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget tempus ipsum. Morbi ut quam ac nibh gravida eleifend nec non nisi. Etiam eleifend nisl sit amet pellentesque finibus. Etiam lacinia ante dolor, id ultrices enim scelerisque nec. Aliquam erat est, sagittis eget rhoncus non, rutrum non sapien. Nunc elit neque, auctor eu elit tempus, scelerisque egestas odio. Vivamus molestie interdum tristique. Maecenas efficitur sapien leo, nec iaculis magna molestie eu. Donec varius dolor sit amet odio laoreet varius. Donec aliquet lectus elit, eget finibus eros accumsan nec. Morbi sagittis, magna quis bibendum dapibus, elit nisi elementum nisi, in tincidunt massa dolor ac mauris. Ut facilisis consectetur sollicitudin. Aenean malesuada lobortis magna, vel feugiat nisi. Proin malesuada rutrum purus ut gravida. Aliquam eu metus dignissim, convallis mauris at, hendrerit libero.</p>
		</div> 

		
		 <div class="six columns paddingtop">
     
      <img src="http://placekitten.com/340/300" width="100%">
      
      
      
		</div>
 <div class="sixteen columns ">
	 
		</div>
     <div class="three columns">
	 &nbsp;
		</div>
     <div class="thirteen columns">
       <div class="boxwho"><center><span class="red">Headline</span><br />
       Nunc elit neque, auctor eu elit tempus, scelerisque egestas odio. Vivamus molestie interdum tristique.<br /><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_red.png" border="0" class="arrow"></center>
 
       </div>
        <div class="boxwho"><center><span class="yellow">Headline</span><br />
       Nunc elit neque, auctor eu elit tempus, scelerisque egestas odio. Vivamus molestie interdum tristique.<br /><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_yellow.png" border="0" class="arrow"></center></div>
        <div class="boxwho"><center><span class="green">Headline</span><br />
       Nunc elit neque, auctor eu elit tempus, scelerisque egestas odio. Vivamus molestie interdum tristique.<br /><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_green.png" border="0" class="arrow"></center></div>
        <div class="boxwho"><center><span class="blue">Headline</span><br />
       Nunc elit neque, auctor eu elit tempus, scelerisque egestas odio. Vivamus molestie interdum tristique.<br /><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_blue.png" border="0" class="arrow"></center></div>
    </div>

		<?php endwhile; ?>

		<?php else: ?>

		<?php endif; ?>

	


<?php get_footer(); ?>
