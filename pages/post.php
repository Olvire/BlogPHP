<?php 

$post = App\App::getDb()->prepare('SELECT * FROM article WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<h1><?php echo $post->titre; ?></h1>
<p><?php echo $post->contenu ?></p>	