<?php /* Smarty version 2.6.25, created on 2014-07-26 06:18:48
         compiled from site/en/footer.html */ ?>

	<script type='text/javascript' src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery-1.10.2.min.js"></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/html5.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.flexslider.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.flexslider.init.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.bxslider.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.bxslider.init.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.rating.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.idTabs.min.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.simplyscroll.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/fluidvids.min.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jPages.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.sidr.min.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/jquery.touchSwipe.min.js'></script>
	<script type='text/javascript' src='<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/custom.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/css/component.css" />
	<script src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/js/snap.svg-min.js"></script>


<?php echo '
		<script>
			(function() {
	
				function init() {
					var speed = 330,
						easing = mina.backout;

					[].slice.call ( document.querySelectorAll( \'#grid > a\' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( \'svg\' ) ), path = s.select( \'path\' ),
							pathConfig = {
								from : path.attr( \'d\' ),
								to : el.getAttribute( \'data-path-hover\' )
							};

						el.addEventListener( \'mouseenter\', function() {
							path.animate( { \'path\' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( \'mouseleave\', function() {
							path.animate( { \'path\' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-44256303-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script>



<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52a8c673432ef3e7"></script>
<script type="text/javascript">
  addthis.layers({
    \'theme\' : \'transparent\',
    \'share\' : {
      \'position\' : \'left\',
      \'numPreferredServices\' : 5
    }   
  });
</script>
<!-- AddThis Smart Layers END -->

'; ?>

	<footer id="footer" class="row-fluid">
		<div id="footer-widgets" class="container">
			<div class="footer-widget span3 block1" >
				<div class="widget widget_latestpost">
					<h3 class="title"><span>Contact</span></h3>
					<div class="latest-posts widget">
						<a href="<?php echo $this->_tpl_vars['base_url']; ?>
/home/contact">Contact Us</a>
					</div>
				</div>
			</div>
			
			<div class="footer-widget span3 block2">
				<div class="widget">
					<h3 class="title"><span>Latest Tweets</span></h3>
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/HaiInteractive" data-widget-id="421745475889274880">Tweets by @HaiInteractive</a>
<?php echo '
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
'; ?>


				</div>
			</div>
			
			<div class="footer-widget span3 block3">
				<div class="widget">
					<h3 class="title"><span>Tag Cloud</span></h3>
					<div class="tagcloud">
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/action'>Action</a>
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/adventure'>Adventure</a>
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/multiplayer'>Multiplayer</a>
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/music'>Music</a>
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/strategy'>Strategy</a>
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/sports'>Sports</a>
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/shooter'>shooter</a>
						<a href='<?php echo $this->_tpl_vars['base_url']; ?>
game/category/puzzle'>Puzzles</a>
					</div>
				</div>
			</div>
			
			<div class="footer-widget span3 block4">
				<div class="widget">
					<h3 class="title"><span>Social Media</span></h3>
						<div class="socmed clearfix">		
							<ul>
								<li>
									<a href="http://plus.google.com/b/117084938212544939196/117084938212544939196/posts" target='_blank'><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/google-plus.jpg" alt=""></a>
									<h4>&nbsp;</h4>
									<p>Fans</p>
								</li>
								<li>
									<a href="https://twitter.com/HaiInteractive" target='_blank'><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/twitter-icon.png" alt=""></a>
									<h4><?php echo $this->_tpl_vars['twit_count']['followers_count']; ?>
</h4>
									<p>Followers</p>
								</li>
								<li>
									<a href="http://facebook.com/coreindiatoday" target='_blank'><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/fb-icon.png" alt=""></a>
									<h4><?php echo $this->_tpl_vars['fb_count']; ?>
</h4>
									<p>Likes</p>
								</li>
							</ul>
						</div>
				</div>
			</div>
			
			<div class="footer-widget span6 block5">
				<span class="footer-logo" style="background-image: url('<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/footer-logo.png'); background-repeat: no-repeat; width: 220px;" alt="Hiiku"></span> 
					<div class="footer-text" style="width: 50% !important">
						<h4>About HaiInteractive</h4>
						<p>Endless Growth Comes with Imagination </p>
					</div><div class="clearfix"></div>
			</div>

		</div><!-- footer-widgets -->

	
		<div id="site-info" class="container">
		

			<div id="credit" class="fl">
				<p>All Right Reserved by HaiInteractive.com</p>
			</div>

		</div><!-- .site-info -->
		
	</footer>

</div><!-- #wrapper -->
	<!-- END body -->
	</body>
<!-- END html -->

</html>