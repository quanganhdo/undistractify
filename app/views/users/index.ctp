<?php if (count($urls) != 0): ?>
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('li').hover(function() {
				$('.actions.' + $('a', this).attr('id')).show();
			}, function() {
				$('.actions.' + $('a', this).attr('id')).hide();
			});
		});
	</script>
	
	<p style="text-align: center"><?php __('Drag these links to your Bookmarks Bar if you haven\'t done so. You are only able to see your most recent 15 links') ?> (<?php echo $html->link(__('why?', true), '/pages/faq#15') ?>).</p>

	<ul>
	<?php foreach ((array) $urls as $url): ?>
		<li>
			<?php echo $html->link($text->truncate($url['title'], 35), array('controller' => 'urls', 'action' => 'view', 'id' => $url['id']), array('id' => $url['id'], 'onclick' => 'javascript:return false')) ?>
			<span class="actions <?php echo $url['id'] ?>">
				<?php echo $html->link(__('edit', true), array('controller' => 'urls', 'action' => 'edit', $url['id'])) ?> |
				<?php echo $html->link(__('delete', true), array('controller' => 'urls', 'action' => 'delete', $url['id'])) ?>
			</span>
		</li>
	<?php endforeach ?>
	</ul>
<?php else: ?>
	<p style="text-align: center"><?php __('Welcome to undistractify!<br />Please add some time-wasting URLs using the link below.') ?></p>
<?php endif ?>
