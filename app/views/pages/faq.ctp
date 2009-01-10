<h1><?php __('FAQ') ?></h1>

<a name="what"></a>
<h2><?php __('What does undistractify do?') ?></h2>
<p><?php __('To cut a long story short, undistractify helps you deal with your procrastination.') ?></p>
<p><?php __('Have lots of things to do today? Still find yourself checking your Facebook profile, Digg homepage and /r/programming every 30 minutes or so? You are not alone. undistractify is designed with you Internet addict in mind.') ?></p>
<p><?php __('undistractify makes sure you have to wait at least a pre-defined time interval before accessing a time-wasting website. By default it is set to 1 hour.') ?></p>

<a name="more"></a>
<h2><?php __('Tell me more about it.') ?></h2>
<p><?php __('Let\'s start by answering this question: How do you access your time-wast, er, favorite websites? By using your bookmarks, right?') ?></p>
<p><?php __('If that is true, all you have to do is replace your existing bookmarks with your brand-new, <em>undistractified</em> ones. undistractify will then do the heavy work for you: each time you click a bookmark, it will check the last time you visited this website; if it was within the pre-defined time interval, the site would be blocked. Otherwise, you are happy to go.') ?></p>
<p><?php __('That\'s it. You decide how long you want to stay on this page. undistractify doesn\'t try to babysit you, it is merely a barrier to prevent you from accessing day-sucking sites at the first place.') ?></p>
<p><?php __('At any time you are able to restore your bookmarks back to regular links one by one, or choose to completely disable undistractify instead.') ?></p>

<a name="account"></a>
<h2><?php __('Why do I need an account?') ?></h2>
<p><?php __('You need a place to organize your time-wasting websites, and having an account enables you to access it from any computer with an internet connection.') ?></p>
<p><?php __('All you need is a dummy username. No signup form to fill in. No password to remember. No email address to give in. It\'s as simple as that.') ?></p>

<a name="15"></a>
<h2><?php __('I added loads of links. Why can\'t I see all of them?') ?></h2>
<p><?php __('By design, you are only able to see your most recent 15 links. Your other links are not deleted, they are just hidden from view. Seriously, if you need that much time-sucking websites, you should turn off your computer and get outside instead.') ?></p>
<p>
	<?php __('What if I save them there for later viewing, you may ask. Well, undistractify is not ') ?>
	<?php echo $html->link('delicious', 'http://delicious.com') ?><?php __('; using it as a bookmarking service is plain wrong.') ?>
</p>

<a name="familiar"></a>
<h2><?php __('This website looks familiar.') ?></h2>
<p>
	<?php __('Yeah, undistractify\'s layout is heavily inspired by Marco Arment\'s ') ?>
	<?php echo $html->link('Instapaper', 'http://instapaper.com') ?><?php __('. It serves different purpose, though.') ?>
</p>

<a name="else"></a>
<h2><?php __('Something else?') ?></h2>
<p><?php __('Shoot me an email if you have another question:') ?></p>
<p><?php echo $html->link('me [at] quanganhdo [dot] com', 'mailto:me[at]quanganhdo[dot]com') ?></p>
<p><?php __('Thanks for reading.') ?></p>