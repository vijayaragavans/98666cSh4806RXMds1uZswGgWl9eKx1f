<?php /* Smarty version 2.6.25, created on 2014-07-25 18:43:14
         compiled from site/en/play.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'site/en/play.html', 13, false),array('modifier', 'truncate', 'site/en/play.html', 85, false),)), $this); ?>

	<div id="headline" class="container">
	<div class="row-fluid">
		
	<?php $_from = $this->_tpl_vars['shooting_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['shooting']):
?>
		<div class="span3">
			<article class="post">
				<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['shooting']['game_id']; ?>
/<?php echo $this->_tpl_vars['shooting']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['shooting']['game_title']; ?>
" rel="bookmark">
				<img width="225" height="136" src="<?php echo $this->_tpl_vars['shooting']['game_image_url']; ?>
" class="thumb" alt="<?php echo $this->_tpl_vars['shooting']['game_ascii_title']; ?>
" />
				</a>
				<div class="entry">
					<h3><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['shooting']['game_id']; ?>
/<?php echo $this->_tpl_vars['shooting']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['shooting']['game_title']; ?>
" rel="bookmark"><?php echo $this->_tpl_vars['shooting']['game_title']; ?>
</a></h3>
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['shooting']['game_published_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
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
			
				<article class="post">
					<h2 class="entry-title">
						<span class="the_title"><?php echo $this->_tpl_vars['game']['game_title']; ?>
</span>
						<span class="entry-cat"><a href="#" title="<?php echo $this->_tpl_vars['game']['game_title']; ?>
" rel="category tag">Game News</a></span>
					</h2>
					<div class="entry-meta row-fluid">
						<ul class="clearfix">
							<li><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/time.png" alt=""><?php echo ((is_array($_tmp=$this->_tpl_vars['game']['game_published_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</li>
							<li><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/view-bg.png" alt=""><?php echo $this->_tpl_vars['game']['game_keyword']; ?>
</li>
							<li><?php echo $this->_tpl_vars['game']['game_categories']; ?>
</li>
						</ul>
					</div>
					<div class="entry-content">
							<embed src="<?php echo $this->_tpl_vars['game']['game_url']; ?>
" height="<?php echo $this->_tpl_vars['game']['game_height']; ?>
" width="<?php echo $this->_tpl_vars['game']['game_width']; ?>
" ></embed>
						<br /><br /><br /> <p>Description: <?php echo $this->_tpl_vars['game']['game_description']; ?>
</p>
						<br/><p>Game Played: <span style="font-weight:bold; color:red;"><?php echo $this->_tpl_vars['game']['game_played']; ?>
</span></p>
						<?php if ($this->_tpl_vars['game']['game_ratings'] > 3): ?>
							<br/><p>Game Rating: <span style='color:green; font-weight:bold;'><?php echo $this->_tpl_vars['game']['game_ratings']; ?>
</span></p>
						<?php else: ?>
							<br/><p>Game Rating: <span style='color:red; font-weight:bold;'><?php echo $this->_tpl_vars['game']['game_ratings']; ?>
</span></p>
						<?php endif; ?>
					</div>
				</article>
			
			</div><!-- #main-left -->

		<div id="sidebar" class="span4">

			<div id="tabwidget" class="widget tab-container"> 
				<ul id="tabnav" class="clearfix"> 
					<li><h3><a href="#tab1" class="selected"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/view-white-bg.png" alt="Popular">Popular</a></h3></li>
					<li><h3><a href="#tab2"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/time-white.png" alt="Recent">Recent</a></h3></li>
				    <li><h3><a href="#tab3"><img src="<?php echo $this->_tpl_vars['static_server']; ?>
files/ugc/images/komen-putih.png" alt="Hot">Hot</a></h3></li>
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

        				
		</div><!-- sidebar -->
		
		<div class="clearfix"></div>

		</div><!-- #main -->

		</div><!-- #content -->
