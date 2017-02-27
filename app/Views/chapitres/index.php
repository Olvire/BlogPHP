<div class="row index">
    <div class="col-xs-8">
        <h1>Les derniers chapitres</h1>
        <?php foreach ($chapitres as $chapitre): ?>
            <div class="chapitre-index jumbotron">
                <h2><a href="<?= $chapitre->url ?>"><?= $chapitre->titre; ?></a></h2>

                <p><em><?= $chapitre->livre; ?></em></p>

                <p><?= $chapitre->extrait; ?></p>
            </div>
        <?php endforeach; ?>

    </div>
    <div class="col-sm-4 livres-index">
        <h1>Les livres</h1>
    <ul>
        <?php foreach($livres as $livre): ?>
            <li>
               <a href="<?= $livre->url; ?>">


                      <?= $livre->titre; ?>


                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    </div>
</div>
<div class="index-pagination">
<?php echo "<a href='index.php?page=1'>1</a>";
for ($i = 2; $i <= $nbrPages; $i++) {
    echo " | <a href=\"index.php?page=$i\">$i</a>"  ;
}?>
</div>
