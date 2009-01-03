<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- meta -->
	<?php echo $html->charset() ?>
	
	<title>
		undistractify &middot; <?php echo $title_for_layout ?>
	</title>
	
	<!-- favicon -->
	<?php echo $html->meta('icon') ?>
	
	<!-- css -->
	<?php echo $html->css('tripoli.simple') ?>
	
	<!--[if IE]>
	<?php echo $html->css('tripoli.simple.ie') ?>
	<![endif]-->
	
	<?php echo $html->css('extra') ?>
	
	<!-- js -->
	<?php echo $javascript->link('jquery-1.2.6.pack') ?>
	<?php echo $scripts_for_layout ?>
</head>
<body style="text-align: center">
	<div id="logo">
		<?php echo $html->link('undistractify', '/') ?>
	</div>
	<div class="content">
		<?php echo $content_for_layout ?>
		
		<p style="text-align: center">
			<?php echo $html->link(__('Add link', true), array('controller' => 'urls', 'action' => 'add'), array('id' => 'add')) ?> &middot;
			<?php echo $html->link(__('Tools', true), '/pages/full/tools') ?> &middot;
			<?php echo $html->link(__('FAQ', true), '/pages/full/faq') ?>
		</p>
	</div>
	<div id="copyright">
		<?php __('Created by ') ?><?php echo $html->link('QAD', 'http://onetruebrace.com') ?> &middot;
		<?php __('Powered by ') ?><?php echo $html->link('CakePHP', 'http://cakephp.org') ?><br />
		<?php __('This project is ') ?><?php echo $html->link('accepting patches', 'http://github.com/quanganhdo/undistractify/tree/master') ?>
	</div>
</body>
</html>