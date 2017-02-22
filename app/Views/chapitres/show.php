<?php 
			$pagesAfter=[];
			$pagesBefore=[];
		foreach ($chapitres as $Chapitre) {
			if ($Chapitre->id > $chapitre->id) {
				$pagesAfter[]=$Chapitre->id;
			} elseif ($Chapitre->id < $chapitre->id) {
				$pagesBefore[]=$Chapitre->id;
			}
		}
		if (isset($pagesAfter[0])) {
			$pageAfter = "index.php?p=chapitres.show&id=".$pagesAfter[0];
		} else {
			$pageAfter = "";
		}
		
		if (isset($pagesBefore[0])) {
			$pageBefore = "index.php?p=chapitres.show&id=".$pagesBefore[count($pagesBefore)-1];
		} else {
			$pageBefore = "";
		}
		
		?>
<div class="row">
	<div class="col-xs-12">
		<h1><?= $chapitre->titre; ?></h1>
		
		<p><em><?= $chapitre->livre; ?></em></p>
		
		<p><?= $chapitre->contenu; ?></p>
		
	</div>
	
	        <div class="col-sm-12 bar-bottom">
	        	<div class="tab-right pull-right">
	        	<a href="#" id="commentaires-bouton">
	        	       <i class="icon icon-arrow-circle-left"></i>
	        	       <span>Commentaires</span>
	        	   </a>
	        	   <a href="<?php echo $pageBefore ?>">
	        	       <i class="icon icon-arrow-circle-left"></i>
	        	       <span>Chapitre précédent</span>
	        	   </a>
	        	   <a href="<?php echo $pageAfter ?>">
	        	       <span>Chapitre suivant</span>
	        	       <i class="icon icon-arrow-circle-right"></i>
	        	   </a> 
	        		       </div>
	        </div>
</div>

<div id="commentaires" class="commentaires row">
 <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Ajouter un commentaire</legend>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Votre commentaire :</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Envoyer</button>
  </div>
</div>

</fieldset>
</form>
	<?php if ($commentaires === false) {
			echo "<p>Pas de commentaires</p>";
			} else {
				foreach ($commentaires as $commentaire) {
					echo "<div id='first.$commentaire->id' class='com1'> <p>$commentaire->contenu;</p> <a id='repondre' class='btn btn-primary pull-right'>Répondre</a><form action='?p=chapitres.signaler' method='post' style='display: inline;'>
                    <input type='hidden' name='id' value='$commentaire->id '>
                    <input type='hidden' name='id_chapitre' value='$chapitre->id'>
                    <button type='submit' class='btn btn-danger'>Signaler</button>
                </form></div>
                <div class='commentaireReponse'>
					<form class='form-horizontal'>
<fieldset>

<!-- Form Name -->
<legend>Ajouter un commentaire</legend>
<input type='hidden' name='id' value='$commentaire->id '>
<!-- Textarea -->
<div class='form-group'>
  <label class='col-md-4 control-label' for='textarea'>Votre commentaire :</label>
  <div class='col-md-4'>                     
    <textarea class='form-control' id='textarea' name='textarea'></textarea>
  </div>
</div>

<!-- Button -->
<div class='form-group'>
  <label class='col-md-4 control-label' for='singlebutton'></label>
  <div class='col-md-4'>
    <button id='singlebutton' name='singlebutton' class='btn btn-primary'>Envoyer</button>
  </div>
</div>

</fieldset>
</form>
                </div>";
					foreach ($commentaires2 as $commentaire2) {
						if ($commentaire2->commentaire_id === $commentaire->id) {
							echo "<div id='second.$commentaire2->id' class='com2'> $commentaire2->contenu; </div>";
							foreach ($commentaires3 as $commentaire3) {
								if ($commentaire3->commentaire2_id === $commentaire2->id) {
									echo "<div id='third.$commentaire3->id' class='com3'> $commentaire3->contenu; </div>";
								}
								
							}
						}
						
					}
				}
			}
		 ?>
		
	 </div>
	 <script>
    $(function(){
        $("#commentaires-bouton").on('click', function (e) { 
        	e.preventDefault();
        	 var commentaires = $('#commentaires');
        	 commentaires.slideUp();
                if (commentaires.is(":hidden")) {
                    commentaires.slideDown();
                };
            });
    });
</script>
