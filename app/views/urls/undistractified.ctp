<p style="text-align: center"><?php __('Your newly undistractified URL: ') ?></p>

<p style="text-align: center">
	<?php echo $html->link($text->truncate($url['Url']['title'], 35), array('controller' => 'urls', 'action' => 'view', 'id' => $url['Url']['id']), array('class' => 'bookmarklet', 'onclick' => 'javascript:return false')) ?>
</p>

<p style="text-align: center">
	<input type="button" name="close" onclick="javascript:window.close()" value="<?php __('Done') ?>" />
</p>