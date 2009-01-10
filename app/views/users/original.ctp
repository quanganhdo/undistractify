<p style="text-align: center">
	<?php __('Here are 15 of your most recent original, unaltered links.') ?><br />
	<?php __('Drag any of them to your Bookmark Bar to restore.') ?>
</p>

<ul>
	<?php foreach ((array) $urls as $url): ?>
		<li>
			<?php echo $html->link($text->truncate($url['title'], 35), $url['address'], array('id' => $url['id'], 'onclick' => 'javascript:return false')) ?>
		</li>
	<?php endforeach ?>
</ul>
