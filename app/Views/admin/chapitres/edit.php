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