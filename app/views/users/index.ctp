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
	
	<?php if ($interval == 'infinity'): ?>
		<p style="text-align: center"><?php __('Currently your time interval is set to *infinity*. You are free to access any of these time-wasting sites with no time constrain.') ?></p>
	<?php elseif (count($urls) > 1): ?>
		<p style="text-align: center"><?php __('Drag these links to your Bookmarks Bar if you haven\'t done so. You are only able to see your most recent 15 links') ?> (<?php echo $html->link(__('why?', true), '/pages/faq#15') ?>).</p>
	<?php else: ?>
		<p style="text-align: center">
			<?php __('Your first undistractified link has been added. You are now only able to visit it every ') ?>
			<?php echo $interval ?>. 
			<?php __('Feel free to ') ?>
			<?php echo $html->link(__('change this time interval', true), array('controller' => 'users', 'action' => 'account')) ?>,
			<?php __('or ') ?>
			<?php echo $html->link(__('undistractify more links', true), array('controller' => 'urls', 'action' => 'add')) ?>.
		</p>
	<?php endif ?>

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
	
	<?php if (count($urls) > 1): ?>
		<p style="text-align: center"><em><?php __('If you want to see your original links, click ') ?><?php echo $html->link(__('here', true), array('controller' => 'users', 'action' => 'original')) ?>.</em></p>
	<?php else: ?>
		<p style="text-align: center">
			<em>
				<?php __('Tip: Drag the link above to your Bookmark Bar.<br />Or, hover it for more choices.') ?>
			</em>
		</p>
	<?php endif ?>
<?php else: ?>
	<p style="text-align: center"><?php __('Welcome to undistractify!<br />Please add some time-wasting URLs using the link below.') ?></p>
<?php endif ?>
