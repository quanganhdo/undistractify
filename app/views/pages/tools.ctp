<h1><?php __('Tools') ?></h1>

<h2><?php __('Bookmarklet') ?></h2>
<p>
	<?php __('Drag ') ?> 
	<?php echo $html->link('undistractify', "javascript:(function()%20{f='" . FULL_BASE_URL . "/urls/add?address='+encodeURIComponent(window.location.href)+'&title='+encodeURIComponent(document.title);a=function()%20{if(!window.open(f,'undistraction','location=yes,links=no,scrollbars=no,toolbar=no,width=500,height=500'))location.href=f+'jump=yes'};if(/Firefox/.test(navigator.userAgent))%20{setTimeout(a,0)}%20else%20{a()}})()", array('class' => 'bookmarklet', 'onclick' => 'javascript:return false')) ?>
	<?php __('to your Bookmarks Bar to install.') ?> 
</p>

<h2><?php __('Bookmark Restore') ?></h2>
<p>
	<?php __('Click ') ?> 
	<?php echo $html->link('here', array('controller' => 'urls', 'action' => 'original')) ?>
	<?php __('to view your original links.') ?> 
</p>