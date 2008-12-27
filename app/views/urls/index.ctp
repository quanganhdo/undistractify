<ul>
<?php foreach ((array) $urls as $url): ?>
	<li>
	<?php echo $html->link($url['Url']['name'], $url['Url']['address']) ?>	
	</li>
<?php endforeach ?>
</ul>