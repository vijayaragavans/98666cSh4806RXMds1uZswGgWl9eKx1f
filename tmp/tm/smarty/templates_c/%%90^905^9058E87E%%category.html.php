<?php /* Smarty version 2.6.25, created on 2014-07-25 18:35:43
         compiled from site/en/category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'site/en/category.html', 13, false),array('modifier', 'truncate', 'site/en/category.html', 55, false),)), $this); ?>

	<div id="headline" class="container">
	<div class="row-fluid">
	<?php $_from = $this->_tpl_vars['category_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['category']):
?>
	  <?php if ($this->_tpl_vars['i'] <= 3): ?>
		<div class="span3">
			<article class="post">
				<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['category']['game_id']; ?>
/<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['category']['game_title']; ?>
" rel="bookmark">
				<img width="225" height="136" src="<?php echo $this->_tpl_vars['category']['game_image_url']; ?>
" class="thumb" alt="<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" />
				</a>
				<div class="entry">
					<h3><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['category']['game_id']; ?>
/<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" rel="bookmark"><?php echo $this->_tpl_vars['category']['game_title']; ?>
</a></h3>
					<p><?php echo ((is_array($_tmp=$this->_tpl_vars['category']['game_published_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</p>
				</div>
				<div class="clearfix"></div>
			</article>
		</div>
	  <?php endif; ?>	
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

	<header class="entry-header">
		<h1 class="entry-title"><span><?php echo $this->_tpl_vars['name']; ?>
</span></h1>
	</header><!-- .entry-header -->
		
					
		<div class="row-fluid">
			<section id="grid" class="grid clearfix" >
		<?php $_from = $this->_tpl_vars['category_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['category']):
?>
	      <?php if ($this->_tpl_vars['i'] > 3): ?>
				<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['category']['game_id']; ?>
/<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z" title="<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" style="border: 1px;" >
					<figure>
						<img src="<?php echo $this->_tpl_vars['category']['game_image_url']; ?>
" alt="<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
						<figcaption>
							<h2><?php echo $this->_tpl_vars['category']['game_title']; ?>
</h2>
							<p><?php echo ((is_array($_tmp=$this->_tpl_vars['category']['game_description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60, "...", true, true) : smarty_modifier_truncate($_tmp, 60, "...", true, true)); ?>
</p>
						</figcaption>
					</figure>
				</a>
		  <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
			</section>
		 
		</div>
		
			<div class="clearfix"></div>
					<div>
						<?php if ($this->_tpl_vars['next'] > 1): ?>
						<a href="<?php echo $this->_tpl_vars['req_uri']; ?>
/<?php echo $this->_tpl_vars['prev']; ?>
" class='next'>Prev</a>
						<span>&nbsp;&nbsp;</span>
						<?php endif; ?>
						<a href="<?php echo $this->_tpl_vars['req_uri']; ?>
/<?php echo $this->_tpl_vars['next']; ?>
" class='next' style="text-align: right;">Next</a>
					</div><br/>
		</div><!-- #main -->

	</div><!-- #content -->
