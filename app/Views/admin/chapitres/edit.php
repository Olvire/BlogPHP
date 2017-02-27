<h1>Editer ce chapitre <a href="index.php?p=admin.chapitres.index" class="btn btn-info pull-right" style="margin-right: 1em">Retour</a></h1>
<form method="post">
    <?= $form->input('titre', 'Tire du chapitre'); ?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->select('livre_id', 'Livre', $livres); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
<script>
  tinymce.init({
    selector: '#contenuChapitre'
  });
  </script>