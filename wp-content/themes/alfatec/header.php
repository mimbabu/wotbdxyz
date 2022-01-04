<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css"/> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/all.min.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">


	<?php  wp_head();?>
	</head>



<body <?php body_class();?>>
<header>
   <nav class="navbar navbar-expand-sm bg-white navbar-dark" id="color-nav">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="https://alfateclimited.com/" class="navbar-brand" id="mylogo"><img src="<?php echo get_template_directory_uri();?>/img/Alfateclogowhite .jpeg"></a>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">


  <?php  
    wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, 
    'container'       => '',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav m-auto',
    'menu_id'         => '',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );

 ?>


 </div>

 
</nav> 

</header>
