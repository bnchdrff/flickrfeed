<?php if (count($photos)): ?>
<div class="flickrfeed">
<?php foreach ($photos as $photo): ?>
<a href="<?php print $photo['url']; ?>" target="_blank"><img src="<?php print $photo[$photo['default_size']]; ?>" alt="<?php print $photo['title']; ?>" /></a>
<?php endforeach; ?>
</div>
<?php endif; ?>
