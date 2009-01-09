<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#UserName').focus();
	});
</script>

<p style="text-align: center"><strong><?php __('Limit access to day-sucking websites the easy way') ?></strong></p>
<hr />

<h1 style="text-align: center"><?php __('How it works') ?></h1>

<ol>
	<li><?php __('You identify websites that you can spend hours clicking around with no particular reason except boredom, procrastination, or lack of more creative ways to spend your time.') ?></li>
	<li><?php __('You transform their URLs into <em>undistractified</em> ones.') ?></li>
	<li><?php __('You use them instead of your regular bookmarks.') ?></li>
</ol>

<hr />

<h1 style="text-align: center"><?php __('Get started') ?></h1>

<?php echo $form->create('User', array('action' => 'login')) ?>
	<?php echo $form->input('name', array('label' => __('Username:', true))) ?>
<?php echo $form->end(__('Let me in', true)) ?>

<p><?php __('You can enter whatever you want here. If this is the first time you use undistractify, your account would be created on the fly. Otherwise, you will be redirected to your dashboard.') ?></p>

<p><?php __('There\'s no password to remember, no email address to give in. All you need is a username. It\'s as simple as that.') ?></p>