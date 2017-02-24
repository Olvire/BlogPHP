<h1>Administrer les livres</h1>

<p>
    <a href="?p=admin.livres.add" class="btn btn-success">Ajouter</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($items as $livre): ?>
        <tr>
            <td><?= $livre->id; ?></td>
            <td><?= $livre->titre; ?></td>
            <td>
                <a class="btn btn-primary" href="?p=admin.livres.edit&id=<?= $livre->id; ?>">Editer</a>
                <form action="?p=admin.livres.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $livre->id ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

