<h1><?php __('Bookmarklet') ?></h1>

<p><?php __('Bookmarklet (Buttons) are links you add to your browser\'s Bookmarks Bar. This bookmarklet is to undistractify your currently viewed website in a snap.') ?></p>

<p><?php __('First, make sure your Bookmarks Bar is visible.') ?></p>

<p>
	<?php __('Now drag ') ?> 
	<?php echo $html->link('undistractify', "javascript:(function()%20{f='" . FULL_BASE_URL . "/urls/add?address='+encodeURIComponent(window.location.href)+'&title='+encodeURIComponent(document.title)+'&tk=$userID';a=function()%20{if(!window.open(f,'undistraction','location=yes,links=no,scrollbars=no,toolbar=no,width=500,height=500'))location.href=f+'jump=yes'};if(/Firefox/.test(navigator.userAgent))%20{setTimeout(a,0)}%20else%20{a()}})()", array('class' => 'bookmarklet', 'onclick' => 'javascript:return false')) ?>
	<?php __('to your Bookmarks Bar to install.') ?> 
</p>