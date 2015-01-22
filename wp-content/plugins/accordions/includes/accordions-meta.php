<?php


function accordions_posttype_register() {
 
        $labels = array(
                'name' => _x('Accordions', 'accordions'),
                'singular_name' => _x('Accordions', 'accordions'),
                'add_new' => _x('New Accordions', 'accordions'),
                'add_new_item' => __('New Accordions'),
                'edit_item' => __('Edit Accordions'),
                'new_item' => __('New Accordions'),
                'view_item' => __('View Accordions'),
                'search_items' => __('Search Accordions'),
                'not_found' =>  __('Nothing found'),
                'not_found_in_trash' => __('Nothing found in Trash'),
                'parent_item_colon' => ''
        );
 
        $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => null,
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title'),
				'menu_icon' => 'dashicons-media-spreadsheet',
				
          );
 
        register_post_type( 'accordions' , $args );

}

add_action('init', 'accordions_posttype_register');





/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function meta_boxes_accordions()
	{
		$screens = array( 'accordions' );
		foreach ( $screens as $screen )
			{
				add_meta_box('accordions_metabox',__( 'accordions Options','accordions' ),'meta_boxes_accordions_input', $screen);
			}
	}
add_action( 'add_meta_boxes', 'meta_boxes_accordions' );


function meta_boxes_accordions_input( $post ) {
	
	global $post;
	wp_nonce_field( 'meta_boxes_accordions_input', 'meta_boxes_accordions_input_nonce' );
	
	
	$accordions_bg_img = get_post_meta( $post->ID, 'accordions_bg_img', true );
	$accordions_themes = get_post_meta( $post->ID, 'accordions_themes', true );
	$accordions_icons = get_post_meta( $post->ID, 'accordions_icons', true );	
	
	$accordions_default_bg_color = get_post_meta( $post->ID, 'accordions_default_bg_color', true );	
	$accordions_active_bg_color = get_post_meta( $post->ID, 'accordions_active_bg_color', true );
	
	$accordions_items_title_color = get_post_meta( $post->ID, 'accordions_items_title_color', true );	
	$accordions_items_title_font_size = get_post_meta( $post->ID, 'accordions_items_title_font_size', true );
	
	$accordions_items_content_color = get_post_meta( $post->ID, 'accordions_items_content_color', true );	
	$accordions_items_content_font_size = get_post_meta( $post->ID, 'accordions_items_content_font_size', true );		
	
	$accordions_items_thumb_size = get_post_meta( $post->ID, 'accordions_items_thumb_size', true );	
	$accordions_items_thumb_max_hieght = get_post_meta( $post->ID, 'accordions_items_thumb_max_hieght', true );	
	
	$accordions_content_title = get_post_meta( $post->ID, 'accordions_content_title', true );	
	$accordions_content_body = get_post_meta( $post->ID, 'accordions_content_body', true );
	
	
 






		$accordions_customer_type = get_option('accordions_customer_type');

		if($accordions_customer_type=="free")
			{
				echo '';
      
			}
		elseif($accordions_customer_type=="pro")
			{
				//premium customer support.
			}

?>




















<table class="form-table">





<tr valign="top">
		<td >
        
        <strong>Shortcode</strong><br />
  <span style=" color:#22aa5d;font-size: 12px;">Copy this shortcode and paste on page or post where you want to display accordions, <br />Use PHP code to your themes file to display accordions.</span>
        
        <br /> <br /> 
        <textarea cols="50" rows="1" style="background:#bfefff" onClick="this.select();" >[accordions <?php echo ' id="'.$post->ID.'"';?> ]</textarea>
        <br /><br />
        PHP Code:<br />
        <textarea cols="50" rows="1" style="background:#bfefff" onClick="this.select();" ><?php echo '<?php echo do_shortcode("[accordions id='; echo "'".$post->ID."' ]"; echo '"); ?>'; ?></textarea>  
        
 <br />

		</td>
	</tr>






    <tr valign="top">

        <td style="vertical-align:middle;">
        
        <ul class="tab-nav">
            <li nav="1" class="nav1 active">Accordions Options</li>
            <li nav="2" class="nav2">Style</li>
            <li nav="3" class="nav3">Content</li>
        
        </ul>


        <ul class="box">
            <li style="display: block;" class="box1 tab-box active">
            <table>
                <tr valign="top">
                	<td style="vertical-align:middle;">
                   <strong>Option's is empty(try other tab.)</strong><br /><br /> 
                    </td>
				</tr>
                
                </table>
            </li>
            <li class="box2 tab-box">
            
            <table>
                <tr valign="top">
                	<td style="vertical-align:middle;">
                    <strong>Themes</strong><br /><br /> 
                    <select name="accordions_themes"  >
                    <option class="accordions_themes_flat" value="flat" <?php if($accordions_themes=="flat")echo "selected"; ?>>Flat</option>
                  
                    </select>
                    </td>
				</tr>


                


				

                
                
                
                
                                           
            <script>
            jQuery(document).ready(function(jQuery)
                {
                        jQuery(".accordions_bg_img_list li").click(function()
                            { 	
                                jQuery('.accordions_bg_img_list li.bg-selected').removeClass('bg-selected');
                                jQuery(this).addClass('bg-selected');
                                
                                var accordions_bg_img = jQuery(this).attr('data-url');
            
                                jQuery('#accordions_bg_img').val(accordions_bg_img);
                                
                            })	
            
                                
                })
            
            </script> 
                            
                            
                            
                            
                            
                            
            <tr valign="top">
            
                    <td style="vertical-align:middle;">
                    
                    <strong>Background Image</strong><br /><br /> 
                    
            
            <?php
            
            
            
                $dir_path = accordions_plugin_dir."css/bg/";
                $filenames=glob($dir_path."*.png*");
            
            
                $accordions_bg_img = get_post_meta( $post->ID, 'accordions_bg_img', true );
                
                if(empty($accordions_bg_img))
                    {
                    $accordions_bg_img = "";
                    }
            
            
                $count=count($filenames);
                
            
                $i=0;
                echo "<ul class='accordions_bg_img_list' >";
            
                while($i<$count)
                    {
                        $filelink= str_replace($dir_path,"",$filenames[$i]);
                        
                        $filelink= accordions_plugin_url."css/bg/".$filelink;
                        
                        
                        if($accordions_bg_img==$filelink)
                            {
                                echo '<li  class="bg-selected" data-url="'.$filelink.'">';
                            }
                        else
                            {
                                echo '<li   data-url="'.$filelink.'">';
                            }
                        
                        
                        echo "<img  width='70px' height='50px' src='".$filelink."' />";
                        echo "</li>";
                        $i++;
                    }
                    
                echo "</ul>";
                
                echo "<input style='width:100%;' value='".$accordions_bg_img."'    placeholder='Please select image or left blank' id='accordions_bg_img' name='accordions_bg_img'  type='text' />";
            
            
            
            ?>
                    </td>
                </tr>
                      
          
                            
                            
            <tr valign="top">
            
                    <td style="vertical-align:middle;">
                    
                    <strong>Icon set</strong><br /><br /> 
                    
            
            <?php
            
            
            
                $dir_path = accordions_plugin_dir."css/icons/";
                $filenames=glob($dir_path."*.png*");
				
             	
            
                $accordions_icons = get_post_meta( $post->ID, 'accordions_icons', true );
                
                if(empty($accordions_icons))
                    {
                    $accordions_icons = "";
                    }
            
            
                $count=count($filenames);
                
            
                $i=0;
                echo "<select class='accordions_icons_list' name='accordions_icons' >";
            
                while($i<$count)
                    {
                        $filelink_name= str_replace($dir_path,"",$filenames[$i]);
						
                        $filelink= accordions_plugin_url."css/icons/".$filelink_name;
						
						$icon_name = str_replace('.png', '', $filelink_name);
						
                        if($accordions_icons==$icon_name)
                            {
                                echo '<option style="background:url('.$filelink.') no-repeat scroll 0 0 rgba(0, 0, 0, 0); padding-left:20px;" selected value="'.$icon_name.'">';
                            }
                        else
                            {
                                echo '<option style="background:url('.$filelink.') no-repeat scroll 0 0 rgba(0, 0, 0, 0); padding-left:20px;" value="'.$icon_name.'">';
                            }
                        
                        

                        echo $icon_name."</option>";
                        $i++;
                    }
                    
                echo "</select>";
                

            
            
            
            ?>
                    </td>
                </tr>
                      
<!--  -->

				<tr valign="top">
                	<td style="vertical-align:middle;">
                    <strong>Default Background Color</strong><br /><br />
                    <input type="text" name="accordions_default_bg_color" id="accordions_default_bg_color" value="<?php if(!empty($accordions_default_bg_color)) echo $accordions_default_bg_color; else echo "#01ce6a"; ?>" />
                    </td>
				</tr>



				<tr valign="top">
                	<td style="vertical-align:middle;">
                    <strong>Active Background Color</strong><br /><br />
                    <input type="text" name="accordions_active_bg_color" id="accordions_active_bg_color" value="<?php if(!empty($accordions_active_bg_color)) echo $accordions_active_bg_color; else echo "#02e576"; ?>" />
                    </td>
				</tr>

                

                
				<tr valign="top">
                	<td style="vertical-align:middle;">
                    <strong>Accordions Header Font Color</strong><br /><br />
                    <input type="text" name="accordions_items_title_color" id="accordions_items_title_color" value="<?php if(!empty($accordions_items_title_color)) echo $accordions_items_title_color; else echo "#28c8a8"; ?>" />
                    </td>
				</tr>                
                
                
				<tr valign="top">
                	<td style="vertical-align:middle;">
                    <strong>Accordions Header Font Size</strong><br /><br />
                    <input type="text" name="accordions_items_title_font_size" placeholder="ex:14px number with px" id="accordions_items_title_font_size" value="<?php if(!empty($accordions_items_title_font_size)) echo $accordions_items_title_font_size; else echo "14px"; ?>" />
                    </td>
				</tr>                   




<tr valign="top">
                	<td style="vertical-align:middle;">
                    <strong>Accordions Content Font Color</strong><br /><br />
                    <input type="text" name="accordions_items_content_color" id="accordions_items_content_color" value="<?php if(!empty($accordions_items_content_color)) echo $accordions_items_content_color; else echo "#fff"; ?>" />
                    </td>
				</tr>



<tr valign="top">
                	<td style="vertical-align:middle;">
                    <strong>Accordions Content Font Size</strong><br /><br />
                    <input type="text" name="accordions_items_content_font_size" id="accordions_items_content_font_size" value="<?php if(!empty($accordions_items_content_font_size)) echo $accordions_items_content_font_size; else echo "13px"; ?>" />
                    </td>
				</tr>








 
		</table>


            </li>
            
            
            <li class="box3 tab-box">
            <div class="accordions-content-buttons" >
                <div class="button add-accordions">Add</div>
                <br /> <br />
            </div>





                <table class="accordions-content">
                
                <?php
                $total_row = count($accordions_content_title);
				
				if(empty($accordions_content_title))
					{
						$accordions_content_title = array(0);
					}
				
				foreach ($accordions_content_title as $index => $accordions_title)
					{

					
					?>
                    <tr index='<?php echo $index; ?>' valign="top">

                        <td style="vertical-align:middle;">
                        <span class="removeaccordions">X</span>
                        <br/><br/>
                        <input width="100%" placeholder="accordions Header" type="text" name="accordions_content_title[<?php echo $index; ?>]" value="<?php if(!empty($accordions_title)) echo $accordions_title; ?>" />
                        <br /><br />
                        <textarea placeholder="accordions Content" name="accordions_content_body[<?php echo $index; ?>]" ><?php if(!empty($accordions_content_body[$index])) echo $accordions_content_body[$index]; ?></textarea>
                        </td>           
                    </tr>
                    <?php
					
					
					}
				
				?>
                
                
                
                
                
                
                


                     
                 </table>
            


            </li>
            
            
            
            
            
            
            
        </ul>
        
        
        
        </td>
    </tr> 

</table>
















<?php


	
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function meta_boxes_accordions_save( $post_id ) {

  /*
   * We need to verify this came from the our screen and with proper authorization,
   * because save_post can be triggered at other times.
   */

  // Check if our nonce is set.
  if ( ! isset( $_POST['meta_boxes_accordions_input_nonce'] ) )
    return $post_id;

  $nonce = $_POST['meta_boxes_accordions_input_nonce'];

  // Verify that the nonce is valid.
  if ( ! wp_verify_nonce( $nonce, 'meta_boxes_accordions_input' ) )
      return $post_id;

  // If this is an autosave, our form has not been submitted, so we don't want to do anything.
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return $post_id;



  /* OK, its safe for us to save the data now. */

  // Sanitize user input.
	$accordions_bg_img = sanitize_text_field( $_POST['accordions_bg_img'] );	
	$accordions_themes = sanitize_text_field( $_POST['accordions_themes'] );
	$accordions_icons = sanitize_text_field( $_POST['accordions_icons'] );

	$accordions_default_bg_color = sanitize_text_field( $_POST['accordions_default_bg_color'] );	
	$accordions_active_bg_color = sanitize_text_field( $_POST['accordions_active_bg_color'] );


	$accordions_items_title_color = sanitize_text_field( $_POST['accordions_items_title_color'] );	
	$accordions_items_title_font_size = sanitize_text_field( $_POST['accordions_items_title_font_size'] );	

	$accordions_items_content_color = sanitize_text_field( $_POST['accordions_items_content_color'] );	
	$accordions_items_content_font_size = sanitize_text_field( $_POST['accordions_items_content_font_size'] );	

	$accordions_items_thumb_size = sanitize_text_field( $_POST['accordions_items_thumb_size'] );
	$accordions_items_thumb_max_hieght = sanitize_text_field( $_POST['accordions_items_thumb_max_hieght'] );	
	
	$accordions_content_title = stripslashes_deep( $_POST['accordions_content_title'] );	
	$accordions_content_body = stripslashes_deep( $_POST['accordions_content_body'] );		
	

	
			


  // Update the meta field in the database.
	update_post_meta( $post_id, 'accordions_bg_img', $accordions_bg_img );	
	update_post_meta( $post_id, 'accordions_themes', $accordions_themes );
	update_post_meta( $post_id, 'accordions_icons', $accordions_icons );

	update_post_meta( $post_id, 'accordions_default_bg_color', $accordions_default_bg_color );
	update_post_meta( $post_id, 'accordions_active_bg_color', $accordions_active_bg_color );


	update_post_meta( $post_id, 'accordions_items_title_color', $accordions_items_title_color );
	update_post_meta( $post_id, 'accordions_items_title_font_size', $accordions_items_title_font_size );

	update_post_meta( $post_id, 'accordions_items_content_color', $accordions_items_content_color );
	update_post_meta( $post_id, 'accordions_items_content_font_size', $accordions_items_content_font_size );

	update_post_meta( $post_id, 'accordions_items_thumb_size', $accordions_items_thumb_size );	
	update_post_meta( $post_id, 'accordions_items_thumb_max_hieght', $accordions_items_thumb_max_hieght );
	
	update_post_meta( $post_id, 'accordions_content_title', $accordions_content_title );
	update_post_meta( $post_id, 'accordions_content_body', $accordions_content_body );	
	






}
add_action( 'save_post', 'meta_boxes_accordions_save' );


























?>