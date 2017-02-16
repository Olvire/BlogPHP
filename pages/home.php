
	
	<?php  foreach (\App\Table\Article::getLast() as $post): ?>
	<h2><a href="<?php echo $post->url ?>"><?php echo $post->titre; ?></a></h2>
	<p><?php echo $post->extrait; ?></p>

	<?php endforeach; ?>
