<!doctype html>
<html>
<head>
 	<meta charset="<?php bloginfo('charset'); ?>" />	
	<title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> <?php else : ?><?php wp_title() ?><?php endif ?></title>
 
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet'>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<?php wp_head(); ?>
 
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=566596270072750";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->

	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<!-- <div class="collapse navbar-collapse navbar-ex1-collapse"> -->
	<?php wp_nav_menu(array('theme_location' => 'Top',
							'container' => 'div',
							'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
							'menu_class' => 'nav navbar-nav',
							'depth' => '1')); ?>
	<!-- </div> -->
	<!-- 
		<ul class="">
			<li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
			<li><a href="#"><i class="icon-camera"></i> Photos</a></li>
			<li><a href="#"><i class="icon-envelope"></i> Contact</a></li>
		</ul>
	</div> --><!-- /.navbar-collapse -->
</nav>
<div class="container">
		<div class="row">
			<div class="col-md-11 col-md-offset-1" id="main">
				<div class="banner">
					<a href="<?php bloginfo('url'); ?>"><h1 class="blog-title"><?php bloginfo('name'); ?></h1></a>
					<h2 class="blog-subtitle"><?php bloginfo('description'); ?></h2>

				</div>