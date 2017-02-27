<h1>Administrer les chapitres <a href="?p=admin.chapitres.add" class="btn btn-success">Ajouter</a><a href="?p=admin.chapitres.deconect" class="btn btn-danger pull-right">Se déconecter</a></h1>

<div class="row">
    <div class="col-xs-12">
        <?php foreach ($chapitres as $chapitre): ?>
    <div class="chapitre-index jumbotron">
            <h2><a href="<?= $chapitre->urlAdmin ?>"><?= $chapitre->titre; ?></a></h2>


            <p><?= $chapitre->extrait; ?></p>
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
