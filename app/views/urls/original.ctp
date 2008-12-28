<p style="text-align: center"><?php __('Here are your original links.<br />Drag them to your Bookmarks Bar to restore.') ?></p>

<ul>
<?php foreach ((array) $urls as $url): ?>
	<li>
		<?php echo $html->link($text->truncate($url['Url']['title'], 35), $url['Url']['address'], array('onclick' => 'javascript:return false')) ?>
	</li>
<?php endforeach ?>
</ul>