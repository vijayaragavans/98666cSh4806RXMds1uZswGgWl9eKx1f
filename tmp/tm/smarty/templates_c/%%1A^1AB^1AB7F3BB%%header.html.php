<?php /* Smarty version 2.6.25, created on 2014-07-26 06:18:48
         compiled from site/en/header.html */ ?>
<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>hiiku.com</title>

		<!-- Meta Tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="distribution" content="global" />		
		<meta name="language" content="en" /> 		
<meta name="google-site-verification" content="VjISa24YNzkFw_ufE9F2o6c3Awm_t-VJgmuZzicRtTk" />		
		<meta property="og:type" content="article" />			
		<meta property="article:author" content="Vijayaragavan Sivagurusamy" />			
		<meta property="article:section" content="" />			
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:creator" content="@vijayaragavans" />
		
		<meta name="txtweb-appkey" content="113e7bc2-9d5f-4148-a178-143d1c248807" />
		<?php if ($this->_tpl_vars['game']): ?>
			<meta property="og:type" content="article" />			
			<meta property="og:image" content="<?php echo $this->_tpl_vars['game']['game_image_url']; ?>
" />
			<meta property="og:image:secure_url" content="<?php echo $this->_tpl_vars['game']['game_image_url']; ?>
" />
			<meta property="og:title" content="<?php echo $this->_tpl_vars['game']['game_title']; ?>
" />
			<meta property="og:description" content="<?php echo $this->_tpl_vars['game']['game_description']; ?>
" />
			<meta property="og:site_name" content="hiiku.com" />
			
		<?php endif; ?>
		<meta name="verifyownership" content="7d1481c31ac7abe693dc0c3fc294b690" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<!-- Favicon -->
		<link rel="icon" href="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/hiiku_ico.ico" sizes="16x16">
		<!-- Stylesheets -->
	<link rel='stylesheet' id='magz-style-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='swipemenu-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/swipemenu.css' type='text/css' media='all' />
	<link rel='stylesheet' id='flexslider-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/flexslider.css' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/bootstrap.css' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-responsive-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/bootstrap-responsive.css' type='text/css' media='all' />
	<link rel='stylesheet' id='simplyscroll-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/jquery.simplyscroll.css' type='text/css' media='all' />
	<link rel='stylesheet' id='jPages-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/jPages.css' type='text/css' media='all' />
	<link rel='stylesheet' id='rating-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/jquery.rating.css' type='text/css' media='all' />
	<link rel='stylesheet' id='ie-styles-css'  href='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/ie.css' type='text/css' media='all' />
	<link rel='stylesheet' id='Roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto' type='text/css' media='all' />

	</head>
	
	<body>

<div id="page">

	<header id="header" class="container">
		<div id="mast-head">
			<div id="logo">
			<a href="<?php echo $this->_tpl_vars['base_url']; ?>
home/index" title="Hiiku" rel="home"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/logo.png" alt="Hiiku" /></a>
			</div>
		</div>

				
        <nav class="navbar navbar-inverse clearfix nobot">
						
			<a id="responsive-menu-button" href="#swipe-menu">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>		
			</a>	

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse" id="swipe-menu-responsive">

			<ul class="nav" style="float: right;">
				
				<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
home/index"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/home.png" alt="Hiiku"></a></li>
				<li class="dropdown"><a href="#">Category</a>
					<ul class="sub-menu">
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/action">Action</a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/adventure">Adventure</a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/multiplayer">Multiplayer</a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/music">Music & More</a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/strategy">Strategy</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#">Special Category</a>
					<ul class="sub-menu">
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/shooter">Shooter</a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/puzzle">Puzzles</a></li>
						<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/sports">Sports</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="http://coreindiatoday.com" target='_blank'>News</a>
				</li>
				<li class="dropdown"><a href="http://rightern.com" target='_blank'>Community</a>
				</li>
				<li><a href="<?php echo $this->_tpl_vars['base_url']; ?>
home/contact">Contact</a></li>
			</ul>

            </div><!--/.nav-collapse -->
			
        </nav><!-- /.navbar -->
			
	</header><!-- #masthead -->