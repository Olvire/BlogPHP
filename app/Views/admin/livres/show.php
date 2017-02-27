<h1><?= $livre->titre ?><a href="index.php?p=admin.chapitres.index" class="btn btn-info pull-right" style="margin-right: 1em">Retour</a></h1>

<div class="row">
    <div class="col-xs-12">
        <?php foreach ($chapitres as $chapitre): ?>
            <div class="chapitre-index jumbotron">
                <h2><a href="<?= $chapitre->urlAdmin ?>"><?= $chapitre->titre; ?></a></h2>

                <p><em><?= $chapitre->livre; ?></em></p>

                <p><?= $chapitre->extraitAdmin; ?></p>
                <div>
                    <a class="btn btn-primary" href="?p=admin.chapitres.edit&id=<?= $chapitre->id; ?>&token=<?= $_SESSION['token']?>">Editer</a>
                    <form action="?p=admin.chapitres.delete&token=<?= $_SESSION['token']?>" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $chapitre->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
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