<script type="text/javascript" charset="utf-8">
	$(function() {
		$('a.time-waster').click(function(e) {
			window.location = '<?php echo FULL_BASE_URL ?>' + '/urls/edit/' + $(this).attr('id');
			e.preventDefault();
			e.stopPropagation();
		});
	});
</script>

<p style="text-align: center"><?php __('Drag these links to your Bookmark Bar if you haven\'t done so') ?></p>
<ul>
<?php foreach ((array) $urls as $url): ?>
	<li>
		<?php echo $html->link($text->truncate($url['Url']['title'], 45), array('controller' => 'urls', 'action' => 'view', 'id' => $url['Url']['id']), array('id' => $url['Url']['id'], 'class' => 'time-waster')) ?>	
	</li>
<?php endforeach ?>
</ul>
<p style="text-align: center"><?php echo $html->link(__('Add link', true), array('controller' => 'urls', 'action' => 'add')) ?></p>