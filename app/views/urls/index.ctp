<p style="text-align: center"><?php __('Drag these links to your Bookmark Bar to get started') ?></p>
<ul>
<?php foreach ((array) $urls as $url): ?>
	<li>
		<?php echo $html->link($text->truncate($url['Url']['title'], 45), array('controller' => 'urls', 'action' => 'view', 'id' => $url['Url']['id'])) ?>	
	</li>
<?php endforeach ?>
</ul>
<p style="text-align: center"><?php echo $html->link(__('Add link', true), array('controller' => 'urls', 'action' => 'add')) ?></p>