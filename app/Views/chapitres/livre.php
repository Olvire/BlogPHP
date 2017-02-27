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
<div class="index-pagination">
    <?php echo "<a href='index.php?p=chapitres.livres&id=$livre->id&page=1'>1</a>";
    for ($i = 2; $i <= $nbrPages; $i++) {
        echo " | <a href=\"index.php?p=chapitres.livres&id=$livre->id&page=$i\">$i</a>"  ;
    }?>
</div>