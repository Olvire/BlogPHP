<h1><?= $livre->titre ?></h1>

<div class="row">
    <div class="col-xs-12">
        <?php foreach ($chapitres as $chapitre): ?>
	<div class="chapitre-index jumbotron">
            <h2><a href="<?= $chapitre->url ?>"><?= $chapitre->titre; ?></a></h2>

            <p><em><?= $chapitre->livre; ?></em></p>

            <p><?= $chapitre->extrait; ?></p>
	</div>
        <?php endforeach; ?>

    </div>

</div>