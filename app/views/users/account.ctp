<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#UserName').focus();
	});
</script>

<p style="text-align: center"><?php __('You are signed in as ') ?><strong><?php echo $session->read('User.name') ?></strong></p>

<?php echo $form->create('User', array('action' => 'account')) ?>
	<?php echo $form->input('name', array('label' => __('Change your username:', true))) ?>
	<?php echo $form->input('interval', array('label' => __('Change your preferred time interval:', true))) ?>
<?php echo $form->end(__('Save', true)) ?>