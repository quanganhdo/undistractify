<p style="text-align: center; font-size: 22px; font-family: Helvetica, Arial, sans-serif; margin: 150px auto; line-height: 28px">
	<?php __('Your newly undistractified URL: ') ?><br />
	<?php echo $html->link($text->truncate($url['Url']['title'], 35), array('controller' => 'urls', 'action' => 'view', 'id' => $url['Url']['id']), array('class' => 'bookmarklet', 'onclick' => 'javascript:return false')) ?>
</p>
