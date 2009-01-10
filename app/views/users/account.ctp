<?php
$options = array('15 minutes', '30 minutes', '1 hour', '2 hours', '3 hours', '6 hours', '12 hours', '1 day', 'infinity');
$options = array_combine($options, $options);
?>

<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#UserName').focus();
	});
</script>

<p style="text-align: center"><?php __('You are signed in as ') ?><strong><?php echo $session->read('User.name') ?></strong></p>

<?php echo $form->create('User', array('action' => 'account')) ?>
	<?php echo $form->input('name', array('label' => __('Change your username:', true))) ?>
	<?php echo $form->input('interval', array('label' => __('Change your preferred time interval:', true), 'type' => 'select', 'options' => $options, 'selected' => $this->data['User']['interval'])) ?>
	<div><em><?php __('Tip: Changing your time interval to *infinity* would enable you to access your time-sucking websites whenever you want; thus defeat the purpose of undistractify.') ?></em></div>
<?php echo $form->end(__('Save', true)) ?>