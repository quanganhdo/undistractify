<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#UrlAddress').focus();
	});
</script>

<?php echo $form->create('Url', array('action' => 'bml')) ?>
	<?php echo $form->input('address', array('type' => 'text', 'label' => __('URL:', true))) ?>
	<?php echo $form->input('title', array('label' => __('Title (optional):', true))) ?>
<?php echo $form->end(__('Add', true)) ?>