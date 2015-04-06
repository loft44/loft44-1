<!DOCTYPE html>
<html lang="en">
	<head>
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf8" />
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
	</head>
	<body>
<!-- Wrap all page content here -->
<div id="wrap">
  
<header class="masthead">
    <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><a href="<?php echo home_url(); ?>" title="Bootstrap Template">Happy Scroll</a>
          <p class="lead">{A Bootstrap Template}</p></h1>
      </div>
      <div class="col-sm-6">
        <div class="pull-right  hidden-xs">    
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h3><i class="glyphicon glyphicon-cog"></i></h3></a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-user"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Link</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
</header>
  
  
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
       <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav nav-justified', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class="divider" id="section1"></div>
  
<div class="container">