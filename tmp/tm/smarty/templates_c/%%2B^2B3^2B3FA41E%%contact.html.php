<?php /* Smarty version 2.6.25, created on 2014-07-25 18:44:45
         compiled from site/en/contact.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'site/en/contact.html', 39, false),array('modifier', 'truncate', 'site/en/contact.html', 116, false),)), $this); ?>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDnh6vs9kYHkkDmv5y8iXRPg8I0ZGKEx2E&amp;sensor=false"></script>
														
<script>
<?php echo '
function initialize() {
  var myLatlng = new google.maps.LatLng(12.921342,77.684391);
  var mapOptions = {
    zoom: 14,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById(\'googleMap\'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: \'Hai Interactive\'
  });
}

google.maps.event.addDomListener(window, \'load\', initialize);
'; ?>

	
</script>



	<div id="headline" class="container">
	<div class="row-fluid">
		
	<?php $_from = $this->_tpl_vars['top4_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['top_four']):
?>
		<div class="span3">
			<article class="post">
				<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['top_four']['game_id']; ?>
/<?php echo $this->_tpl_vars['top_four']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['top_four']['game_title']; ?>
" rel="bookmark">
				<img width="225" height="136" src="<?php echo $this->_tpl_vars['top_four']['game_image_url']; ?>
" class="thumb" alt="<?php echo $this->_tpl_vars['top_four']['game_ascii_title']; ?>
" />
				</a>
				<div class="entry">
					<h3><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['top_four']['game_id']; ?>
/<?php echo $this->_tpl_vars['top_four']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['top_four']['game_title']; ?>
" rel="bookmark"><?php echo $this->_tpl_vars['top_four']['game_title']; ?>
</a></h3>
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['top_four']['game_updated_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</p>
				</div>
				<div class="clearfix"></div>
			</article>
		</div>
	<?php endforeach; endif; unset($_from); ?>	

		
	</div>
	</div>

	<div id="intr" class="container">
		<div class="row-fluid">

		<div class="search span3"><div class="offset1">
			<form method="get" id="searchform" action="<?php echo $this->_tpl_vars['base_url']; ?>
home/search/">
				<p><input type="text" placeholder="Search here..." name="key" id="key" />
				<input type="submit" id="searchsubmit" value="Search" /></p>
			</form>
		</div></div>
		</div>
	</div>

	<div id="content" class="container">

		<div id="main" class="row-fluid">
			<div id="main-left" class="span8">
			
			<article id="post-206" class="post-206 page type-page status-publish hentry instock">
				<header class="entry-header">
					<h1 class="entry-title"><span>Contact</span></h1>
				</header><!-- .entry-header -->
				
				<div id="googleMap" style="width:100%;height:400px;"></div><br />
				
				<form class="contact-form" action="<?php echo $this->_tpl_vars['base_url']; ?>
home/contact" method="post">
					<div style="color: green; font-weight: bold;"><?php echo $this->_tpl_vars['success']; ?>
</div>
					<div class="cform name">
						<input type="text" name="cf_name" id="cf_name" size="50" maxlength="50" value="" placeholder="Your Name" />
					</div>
					<div class="cform email">
						<input type="text" name="cf_email" id="cf_email" size="50" maxlength="50" value="" placeholder="Your E-mail Address" />
					</div>
					<div class="cform website">
						<input type="text" name="cf_subject" id="cf_subject" size="50" maxlength="50" value="" placeholder="Subject" />
					</div>

					<div class="clearfix"></div>

					<div>
						<textarea name="cf_message" id="cf_message" cols="50" rows="3" placeholder="Your Message"></textarea>
					</div>
					<div>
						<input type="submit" value="Submit" name="send" id="cf_send" />
					</div>
				</form>
			</article>
	
			</div><!-- #main-left -->

		<div id="sidebar" class="span4">

			<div id="tabwidget" class="widget tab-container"> 
				<ul id="tabnav" class="clearfix"> 
					<li><h3><a href="#tab1" class="selected"><img src="images/view-white-bg.png" alt="Popular"></a></h3></li>
					<li><h3><a href="#tab2"><img src="images/time-white.png" alt="Recent"></a></h3></li>
				    <li><h3><a href="#tab3"><img src="images/komen-putih.png" alt="Comments"></a></h3></li>
				</ul> 

			<div id="tab-content">
			
	 		<div id="tab1" style="display: block; ">
				<ul id="itemContainer" class="recent-tab">
				<?php $_from = $this->_tpl_vars['popular_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['popular']):
?>
					<li>
						<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['popular']['game_id']; ?>
/<?php echo $this->_tpl_vars['popular']['game_ascii_title']; ?>
"><img width="225" height="136" src="<?php echo $this->_tpl_vars['popular']['game_image_url']; ?>
" class="thumb" alt="shutterstock_58382248" /></a>
						<h4 class="post-title"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['popular']['game_id']; ?>
/<?php echo $this->_tpl_vars['popular']['game_ascii_title']; ?>
"><?php echo $this->_tpl_vars['popular']['game_title']; ?>
</a></h4>
						<p><?php echo ((is_array($_tmp=$this->_tpl_vars['popular']['game_description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 120, "...", true, true) : smarty_modifier_truncate($_tmp, 120, "...", true, true)); ?>
</p>
						<div class="clearfix"></div>				
					</li>
				<?php endforeach; endif; unset($_from); ?>	

				</ul>
				
				<div class="holder clearfix"></div>
				<div class="clear"></div>

			<!-- End most viewed post -->		  

			</div><!-- /#tab1 -->
 
			<div id="tab2" style="display: none;">	
				<ul id="itemContainer2" class="recent-tab">
				
				<?php $_from = $this->_tpl_vars['recent_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['recent']):
?>
					<li>
						<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['recent']['game_id']; ?>
/<?php echo $this->_tpl_vars['recent']['game_ascii_title']; ?>
"><img width="225" height="136" src="<?php echo $this->_tpl_vars['recent']['game_image_url']; ?>
" class="thumb" alt="<?php echo $this->_tpl_vars['recent']['game_ascii_title']; ?>
" /></a>
						<h4 class="post-title"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['recent']['game_id']; ?>
/<?php echo $this->_tpl_vars['recent']['game_ascii_title']; ?>
"><?php echo $this->_tpl_vars['recent']['game_title']; ?>
</a></h4>
						<p><?php echo ((is_array($_tmp=$this->_tpl_vars['recent']['game_description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 120, "...") : smarty_modifier_truncate($_tmp, 120, "...")); ?>
</p>
						<div class="clearfix"></div>	
					</li>
				<?php endforeach; endif; unset($_from); ?>	

				</ul> 	 
			</div><!-- /#tab2 --> 

			<div id="tab3" style="display: none; ">
				<ul>
				<?php $_from = $this->_tpl_vars['hot_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['hot']):
?>
					<li>
						<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['hot']['game_id']; ?>
/<?php echo $this->_tpl_vars['hot']['game_ascii_title']; ?>
"><img width="225" height="136" src="<?php echo $this->_tpl_vars['hot']['game_image_url']; ?>
" class="thumb" alt="<?php echo $this->_tpl_vars['hot']['game_ascii_title']; ?>
" /></a>
						<h4 class="post-title"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['hot']['game_id']; ?>
/<?php echo $this->_tpl_vars['hot']['game_ascii_title']; ?>
"><?php echo $this->_tpl_vars['hot']['game_title']; ?>
</a></h4>
						<p><?php echo ((is_array($_tmp=$this->_tpl_vars['hot']['game_description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 120, "...") : smarty_modifier_truncate($_tmp, 120, "...")); ?>
</p>
						<div class="clearfix"></div>	
					</li>
				<?php endforeach; endif; unset($_from); ?>	
				</ul>
			</div><!-- /#tab2 --> 
	
			</div><!-- /#tab-content -->

			</div><!-- /#tab-widget --> 

		</div><!-- sidebar -->
		
		<div class="clearfix"></div>

		</div><!-- #main -->

		</div><!-- #content -->
