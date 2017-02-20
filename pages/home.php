<div class="row">
	<div class="col-sm-8">
		
	<?php  foreach (\App\Table\Article::getLast() as $post): ?>
	<h2><a href="<?php echo $post->url ?>"><?php echo $post->titre; ?></a></h2>
	<p><?php echo $post->extrait; ?></p>

	<?php endforeach; ?>
	</div>
	
	<div class="col-sm-4">
	<h2>Catégories</h2>
	<ul>
		<?php  foreach (\App\Table\Categorie::all() as $categorie): ?>
			<li>
				<a href="<?php echo $categorie->url ?>"><?php echo $categorie->titre; ?></a>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>

</div>
	
	

