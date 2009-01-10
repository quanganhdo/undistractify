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
		<?php echo $html->link('undistract<em>ify</em>', '/', array('escape' => false)) ?>
	</div>
	<div class="content">
		<?php echo $content_for_layout ?>
		
		<?php if (!$isGuest): ?>
		<p style="text-align: center">
			<?php echo $html->link(__('Add link', true), array('controller' => 'urls', 'action' => 'add'), array('id' => 'add')) ?> &middot;
			<?php echo $html->link(__('Bookmarklet', true), '/pages/bookmarklet') ?> &middot;
			<?php echo $html->link(__('Account', true), array('controller' => 'users', 'action' => 'account')) ?> &middot;
			<?php echo $html->link(__('Log out', true), array('controller' => 'users', 'action' => 'logout')) ?> 
		</p>
		<?php endif ?>
	</div>
	<div id="copyright">
		<?php echo $html->link(__('FAQ', true), '/pages/faq') ?> &middot;
		<?php __('Created by ') ?><?php echo $html->link('Quang Anh Do', 'http://onetruebrace.com') ?><br />
		<?php __('This project is powered by ') ?><?php echo $html->link('CakePHP', 'http://cakephp.org') ?>
	</div>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("<?php echo Configure::read('GOOGLE_ANALYTICS') ?>");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>