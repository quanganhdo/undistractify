<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- meta -->
	<?php echo $html->charset() ?>
	
	<title>
		undistraction &middot; <?php echo $title_for_layout ?>
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
	<?php echo $scripts_for_layout ?>
</head>
<body style="text-align: center">
	<div id="logo">
		<?php echo $html->link('undistraction', '/') ?>
	</div>
	<div class="content">
		<?php echo $content_for_layout ?>
	</div>
</body>
</html>