<h1><?php __('Tools') ?></h1>

<p>
	<?php __('Drag ') ?> 
	<?php echo $html->link('undistractify', "javascript:(function()%20{f='http://undistraction:8888/urls/add?address='+encodeURIComponent(window.location.href)+'&title='+encodeURIComponent(document.title);a=function()%20{if(!window.open(f,'undistraction','location=yes,links=no,scrollbars=no,toolbar=no,width=500,height=500'))location.href=f+'jump=yes'};if(/Firefox/.test(navigator.userAgent))%20{setTimeout(a,0)}%20else%20{a()}})()", array('class' => 'bookmarklet')) ?>
	<?php __('to your Bookmarks Bar to install') ?> 
</p>
