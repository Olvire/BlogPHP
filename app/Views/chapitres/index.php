<div class="row index">

    <div class="col-sm-12">
        
        <?php foreach($livres as $livre): ?>
           <a href="<?= $livre->url; ?>">
           <div class="voile">
                <div class="livre-couverture">
                    <h3><?= $livre->titre; ?></h3>
                </div>
            </div>
            </a>
        <?php endforeach; ?>
        
    </div>
</div>