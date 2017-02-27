<div class="row index">


        
        <?php foreach($commentaires as $commentaire): ?>
          
                <div class="commentaire-couverture col-sm-12">
                    <p><?= $commentaire->contenu; ?></p>
                </div>
        <?php endforeach; ?>
        

</div>