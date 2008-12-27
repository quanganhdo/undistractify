<ul>
<?php foreach ((array) $urls as $url): ?>
	<li>
		<?php echo $html->link($url['Url']['name'], array('controller' => 'urls', 'action' => 'view', 'id' => $url['Url']['id'])) ?>	
	</li>
<?php endforeach ?>
</ul>