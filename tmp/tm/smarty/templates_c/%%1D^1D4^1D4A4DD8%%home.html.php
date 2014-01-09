<?php /* Smarty version 2.6.25, created on 2014-01-09 02:05:39
         compiled from site/en/home.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'site/en/home.html', 12, false),array('modifier', 'truncate', 'site/en/home.html', 90, false),)), $this); ?>
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
			<form method="get" id="searchform" action="#">
				<p><input type="text" value="Search here..." onfocus="if ( this.value == 'Search here...' ) " onblur="if ( this.value == '' ) " name="s" id="s" />
				<input type="submit" id="searchsubmit" value="Search" /></p>
			</form>
		</div></div>
		</div>
	</div>

	<div id="content" class="container">

		<div id="main" class="row-fluid">
			<div id="main-left" class="span8">
				<div id="slider" class="clearfix">
					<div id="slide-left" class="flexslider span14">

						<div id="leaderboard_bridge"></div>
						<div>
							<?php echo $this->_tpl_vars['main_game']['game_embed']; ?>

						</div>
						<script src="http://xs.mochiads.com/static/pub/swf/leaderboard.js" type="text/javascript"></script>
						<script type="text/javascript">
						// Mochi Bridge
						var options = ;
						// optional
						options.siteName = "Hiiku.com";
						// optional
						options.callback = function (params) 						Mochi.addLeaderboardIntegration(options);
						</script>
					</div>

				</div>
				
				<div id="home-top">
					<h3 class="title"><span>Casino</span></h3>
					<ul class="bxslider">
					
					<?php $_from = $this->_tpl_vars['casino_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['casino']):
?>
						<li><a class="image_thumb_zoom" href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['casino']['game_id']; ?>
/<?php echo $this->_tpl_vars['casino']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['casino']['game_title']; ?>
" rel="bookmark">
							<img width="225" height="136" src="<?php echo $this->_tpl_vars['casino']['game_image_url']; ?>
" alt="<?php echo $this->_tpl_vars['casino']['game_ascii_title']; ?>
" />
							</a>
							<h4 class="post-title clearfix">
								<img class="post-icon" alt="Text post" src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/text.png">
								<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['casino']['game_id']; ?>
/<?php echo $this->_tpl_vars['casino']['game_ascii_title']; ?>
" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark"><?php echo $this->_tpl_vars['casino']['game_title']; ?>
</a>
							</h4>
							<div class="meta clearfix">
								<span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['casino']['game_published_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</span>
							</div>
						</li>
					<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
				
				<div id="home-middle" class="clearfix">
					<div class="left span6">
						<h3 class="title"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/Fighting" title="Fighting"><span>Fighting</span></a></h3>
						<div class="row-fluid">	

							<article class="post">
								<div class="entry clearfix">
									<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['left_game']['game_id']; ?>
/<?php echo $this->_tpl_vars['left_game']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['left_game']['game_title']; ?>
" rel="bookmark">
									<img width="225" height="136" src="<?php echo $this->_tpl_vars['left_game']['game_image_url']; ?>
" class="thumb" alt="<?php echo $this->_tpl_vars['left_game']['game_ascii_title']; ?>
" />
									<h4 class="post-title"><?php echo $this->_tpl_vars['left_game']['game_title']; ?>
</h4>
									</a>
									<p><?php echo ((is_array($_tmp=$this->_tpl_vars['left_game']['game_description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true, true) : smarty_modifier_truncate($_tmp, 150, "...", true, true)); ?>
</p>
									<div class="meta">
										<span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['left_game']['game_updated_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</span>
									</div>
								</div>
							</article>

							<div class="clearfix"></div>
						</div>
					</div>

					<div class="right span6">
						<h3 class="title"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/category/adventure" title="Sport News"><span>Adventure</span></a></h3>
							<div class="row-fluid">

							<?php $_from = $this->_tpl_vars['adventures_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['adventure']):
?>

								<article class="post">
									<div class="entry clearfix">
										<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['adventure']['game_id']; ?>
/<?php echo $this->_tpl_vars['adventure']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['adventure']['gmae_title']; ?>
" rel="bookmark">
										<img width="225" height="136" src="<?php echo $this->_tpl_vars['adventure']['game_image_url']; ?>
" class="thumb wp-post-image" alt="<?php echo $this->_tpl_vars['adventure']['game_ascii_title']; ?>
" />
										<h4 class="post-title"><?php echo $this->_tpl_vars['adventure']['game_title']; ?>
</h4>
										</a>
										<p><?php echo ((is_array($_tmp=$this->_tpl_vars['adventure']['game_description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true, true) : smarty_modifier_truncate($_tmp, 150, "...", true, true)); ?>
</p>
										<div class="meta">
											<span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['adventure']['game_published_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</span>
										</div>
									</div>
								</article>
							<?php endforeach; endif; unset($_from); ?>
								<div class="clearfix"></div>

							</div>
					</div>

				</div>

				<div id="home-bottom" class="clearfix">
					<h3 class="title"><a href="#" title="Fashion News"><span>Advertisment</span></a></h3>	
					<div class="row-fluid">	
						<div class="span6">
							<!-- Tags Code For https://gloadmarket.com -->  
								<script src="http://insert.gloadmarket.com/core/ads.php?SI=691&TYPE=banner&SIZE=1" type="text/javascript"></script> 
							<!-- End Tags -->
						</div>

						<div class="span6">
						<?php $_from = $this->_tpl_vars['rhythm_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['rhythm']):
?>
						
							<article class="post">
								<div class="entry clearfix">
									<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['rhythm']['game_id']; ?>
/<?php echo $this->_tpl_vars['rhythm']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['rhythm']['game_title']; ?>
" rel="bookmark">
									<img width="225" height="136" src="<?php echo $this->_tpl_vars['rhythm']['game_image_url']; ?>
" class="thumb" alt="<?php echo $this->_tpl_vars['rhythm']['game_ascii_title']; ?>
" />
									<h4 class="post-title"><?php echo $this->_tpl_vars['rhythm']['game_title']; ?>
</h4>
									</a>
									<p><?php echo ((is_array($_tmp=$this->_tpl_vars['rhythm']['game_description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 150, "...", true, true) : smarty_modifier_truncate($_tmp, 150, "...", true, true)); ?>
</p>
									<div class="meta">
										<span class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['rhythm']['game_published_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</span>
									</div>
								</div>
							</article>

						<?php endforeach; endif; unset($_from); ?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

			</div><!-- #main-left -->

		<div id="sidebar" class="span4">
		
			<div>
			</div>

			<div id="tabwidget" class="widget tab-container"> 
				<ul id="tabnav" class="clearfix"> 
					<li><h3><a href="#tab1" class="selected"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/view-white-bg.png" alt="Popular">Popular</a></h3></li>
					<li><h3><a href="#tab2"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/time-white.png" alt="Recent">Recent</a></h3></li>
				    <li><h3><a href="#tab3"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/komen-putih.png" alt="Comments">Hot</a></h3></li>
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
				<ul id="itemContainer2" class="recent-tab">
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

			<div class="widget widget_latestpost">
				<h3 class="title"><span>Advertisment</span></h3>
				<div class="latest-posts widget">
					<!-- Tags Code For https://gloadmarket.com -->  
						<script src="http://insert.gloadmarket.com/core/ads.php?SI=691&TYPE=banner&SIZE=1" type="text/javascript"></script> 
					<!-- End Tags -->
					
					<?php $_from = $this->_tpl_vars['education_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['education']):
?>
					<div class="latest-post clearfix">
						<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['education']['game_id']; ?>
/<?php echo $this->_tpl_vars['education']['game_ascii_title']; ?>
"><img width="225" height="136" src="<?php echo $this->_tpl_vars['education']['game_image_url']; ?>
" class="thumb fl" alt="<?php echo $this->_tpl_vars['education']['game_ascii_title']; ?>
" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Suspen disse auctor dapibus neque pulvinar urna leo"><?php echo $this->_tpl_vars['education']['game_title']; ?>
</a></h4>
						<div class="post-time"><?php echo ((is_array($_tmp=$this->_tpl_vars['education']['game_published_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</div>
					</div>
					<?php endforeach; endif; unset($_from); ?>


				</div>
			</div>

			<div class="widget widget_latestpost"><h3 class="title"><span>Advertisment</span></h3>
				<div class="latest-posts">
				
					<article class="post">
						<!-- Tags Code For https://gloadmarket.com -->  
							<script src="http://insert.gloadmarket.com/core/ads.php?SI=691&TYPE=banner&SIZE=1" type="text/javascript"></script> 
						<!-- End Tags -->
					</article>

				</div>
			</div>
			
        				
		</div><!-- sidebar -->
		
		<div class="clearfix"></div>


		</div><!-- #main -->

		</div><!-- #content -->