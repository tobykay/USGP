<div class="wrap">
	<?php echo "<h2>".__(accordions_plugin_name.' Help')."</h2>";?>
    <br />

		  
        
        
<h3>Have any issue ?</h3>

<p>Feel free to Contact with any issue for this plugin, , Ask any question via forum <a href="<?php echo accordions_qa_url; ?>"><?php echo accordions_qa_url; ?></a> <strong style="color:#139b50;">(free)</strong>


</p>

<?php

$accordions_customer_type = get_option('accordions_customer_type');
$accordions_version = get_option('accordions_version');


?>
<?php
if($accordions_customer_type=="free")
	{
		echo '<p>You are using <strong> '.$accordions_customer_type.' version  '.$accordions_version.'</strong> of <strong>'.accordions_plugin_name.'</strong>, To get more feature you could try our premium version. ';
		
		echo '<a href="'.accordions_pro_url.'">'.accordions_pro_url.'</a></p>';
		
		
	}
elseif($accordions_customer_type=="pro")
	{

		echo '<p>Thanks for using <strong> '.$accordions_customer_type.' version  '.$accordions_version.'</strong> of <strong>'.accordions_plugin_name.'</strong> </p>';
		
		
	}

 ?>




<?php
if($accordions_customer_type=="free")
	{
?>
<br />
<b>Premium Version Features</b><br />

<ul class="accordions-pro-features">

	<li>Fully responsive and mobile ready.</li>
	<li>Unlimited accordions anywhere.</li>
	<li>Use via short-code.</li>
	<li>Different Theme.</li>
	<li>Background Image for accordions area.</li>
	<li>Custom Active accordions background color.</li>
	<li>Custom default background color.</li>
	<li>Custom font color and size for accordions header.</li>
	<li>Custom font color and size for accordions content.</li>    
</ul>



</p>
        
        
        
      <?php
      }
	  
	  ?>  
      
<br /> 
<h3>Please share this plugin with your friends?</h3>
<table>
<tr>
<td width="100px"> 
<!-- Place this tag in your head or just before your close body tag. -->
<script type="text/javascript" src="https://apis.google.com/js/platform.js"></script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-href="<?php echo accordions_share_url; ?>"></div>

</td>
<td width="100px">
<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo accordions_share_url; ?>&amp;width=100&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=743541755673761" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>

 </td>
<td width="100px"> 





<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo accordions_share_url; ?>" data-text="<?php echo accordions_plugin_name;  ?>">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</td>

</tr>

</table>
        
        
         
</div>
<style type="text/css">
.accordions-pro-features{}

.accordions-pro-features li {
  list-style: disc inside none;
}

</style>