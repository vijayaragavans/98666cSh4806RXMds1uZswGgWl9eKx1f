<?php /* Smarty version 2.6.25, created on 2014-01-08 03:12:41
         compiled from site/en/category.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'site/en/category.html', 13, false),)), $this); ?>

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
			<form method="get" id="searchform" action="#">
				<p><input type="text" value="Search here..." onfocus="if ( this.value == 'Search here...' ) " onblur="if ( this.value == '' ) " name="s" id="s" />
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
		<?php $_from = $this->_tpl_vars['category_games']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['category']):
?>
	      <?php if ($this->_tpl_vars['i'] > 3): ?>
			<div class="kontengal4 span3">
				<article class="galleries">
					<a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['category']['game_id']; ?>
/<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" rel="prettyPhoto"><img width="570" height="360" src="<?php echo $this->_tpl_vars['category']['game_image_url']; ?>
" alt="<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" /></a>
					<h3 class="gal-title"><a href="<?php echo $this->_tpl_vars['base_url']; ?>
game/play/<?php echo $this->_tpl_vars['category']['game_id']; ?>
/<?php echo $this->_tpl_vars['category']['game_ascii_title']; ?>
" title="<?php echo $this->_tpl_vars['category']['game_title']; ?>
" rel="bookmark"><?php echo $this->_tpl_vars['category']['game_title']; ?>
</a></h3>
				</article>
			</div>
		  <?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>	
		 
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
