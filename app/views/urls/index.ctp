<script type="text/javascript" charset="utf-8">
	$(function() {
		$('li').hover(function() {
			$('.actions.' + $('a', this).attr('id')).show();
		}, function() {
			$('.actions.' + $('a', this).attr('id')).hide();
		});
	});
</script>

<p style="text-align: center"><?php __('Drag these links to your Bookmarks Bar if you haven\'t done so. This is not your start page, so don\'t bother clicking them.') ?></p>
<ul>
<?php foreach ((array) $urls as $url): ?>
	<li>
		<?php echo $html->link($text->truncate($url['Url']['title'], 45), array('controller' => 'urls', 'action' => 'view', 'id' => $url['Url']['id']), array('id' => $url['Url']['id'], 'onclick' => 'javascript:return false')) ?>
		<span class="actions <?php echo $url['Url']['id'] ?>">
			<?php echo $html->link(__('Edit', true), array('controller' => 'urls', 'action' => 'edit', $url['Url']['id'])) ?> | 
			<?php echo $html->link(__('Delete', true), array('controller' => 'urls', 'action' => 'delete', $url['Url']['id'])) ?>
		</span>
	</li>
<?php endforeach ?>
</ul>
<p style="text-align: center"><?php echo $html->link(__('Add link', true), array('controller' => 'urls', 'action' => 'add')) ?></p>