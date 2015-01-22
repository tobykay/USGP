<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" l<?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gdf.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="container">
		<div class="sixteen columns headerimage">
			<img src="<?php echo get_template_directory_uri(); ?>/img/header.png" border="0" width="100%">    
		</div>
    <div class="sixteen columns nav">
    <ul id="navlist">
<?php html5blank_nav(); ?>

<li><?php get_search_form(); ?></li>
	
   </ul>
      
		</div>
 


				
			
