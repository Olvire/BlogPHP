<h1><?= $livre->titre ?></h1>

<div class="row livre">
    <div class="col-sm-12">
        <h2> <?php echo $chapitres[0]->titre ?></h2>
        <p><?php echo $chapitres[0]->contenu ?></p>
    </div>
    <div class="col-sm-12 bar-bottom">
        <div class="col-sm-6">
            <form action="">
                <div class="custom-select">
                    <select name="chapitre" id="">
                        <?php foreach ($chapitres as $chapitre): ?>

                          <option value="<?php echo $chapitre->titre?>">
                              <?php echo $chapitre->titre?>
                          </option>

                      <?php endforeach; ?> 
                  </select>
              </div>
          </form>
      </div>
      <div class="col-sm-6">
        <div class="tab-right pull-right">
           <a href="">
               <i class="icon icon-arrow-circle-left"></i>
               <span>Chapitre précédent</span>
           </a>
           <a href="">
               <span>Chapitre suivant</span>
               <i class="icon icon-arrow-circle-right"></i>
           </a> 
           <a href="">
               <span>Commentaires</span>
           </a>
       </div>
   </div> 

</div>