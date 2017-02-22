<h1><?= $livre->titre ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php foreach ($chapitres as $chapitre): ?>

            <h2><a href="<?= $chapitre->url ?>"><?= $chapitre->titre; ?></a></h2>

            <p><em><?= $chapitre->livre; ?></em></p>

            <p><?= $chapitre->extrait; ?></p>

        <?php endforeach; ?>

    </div>

</div>