<?php get_header(); ?>

	<div class="two-thirds column indent">
      <br />
				<h3><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>
		<hr />   
    			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
    
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


	


<?php get_footer(); ?>
