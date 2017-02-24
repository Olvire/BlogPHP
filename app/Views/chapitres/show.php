
<div class="row">
	<div class="col-xs-12 chapitre">
		<h1><?= $chapitre->titre; ?></h1>
		
		<p><em><?= $chapitre->livre; ?></em></p>
		
		<p><?= $chapitre->contenu; ?></p>
		
	</div>
	
	        <div class="col-xs-12 bar-bottom">
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
 <form action="index.php?p=chapitres.addCom" method="post" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Ajouter un commentaire</legend>

<!-- Textarea -->
<input type='hidden' name='id_chapitre' value=<?php echo "$chapitre->id" ?>>
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Votre commentaire :</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="contenu"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-primary" value="Envoyer">
  </div>
</div>

</fieldset>
</form>
	<?php if ($commentaires === false) {
			echo "<p>Pas de commentaires</p>";
			} else {
				foreach ($commentaires as $commentaire) {
echo "<div id='first.$commentaire->id' class='com com1'>
		 <p>$commentaire->contenu;</p> 
 			
 			<form action='index.php?p=chapitres.signaler' method='post' style='display: inline;'>
                    <input type='hidden' name='id' value='$commentaire->id '>
                    <input type='hidden' name='id_chapitre' value='$chapitre->id'>
                    <button type='submit' class='btn btn-danger pull-right'>Signaler</button>
            </form>
            <a class='repondre btn btn-primary pull-right'>Répondre</a>
                   <div class='commentaireReponse'>
		<form action='index.php?p=chapitres.addCom2' method='post' class='form-horizontal'>
			<fieldset>

			<!-- Form Name -->
			<legend>Ajouter un commentaire</legend>
			<input type='hidden' name='id_chapitre' value='$chapitre->id'>
			<input type='hidden' name='commentaire_id' value='$commentaire->id '>
			<!-- Textarea -->
			<div class='form-group'>
			  <label class='col-md-4 control-label' for='textarea'>Votre commentaire :</label>
			  <div class='col-md-4'>                     
			    <textarea class='form-control' id='textarea' name='contenu'></textarea>
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
      </div>
       </div>
";
					foreach ($commentaires2 as $commentaire2) {
						if ($commentaire2->commentaire_id === $commentaire->id) {
echo "<div id='second.$commentaire2->id' class='com com2'>
		<p> $commentaire2->contenu; </p>
			
			<form action='index.php?p=chapitres.signaler2' method='post' style='display: inline;'>
	                    <input type='hidden' name='id' value='$commentaire2->id '>
	                    <input type='hidden' name='id_chapitre' value='$chapitre->id'>
	                    <button type='submit' class='btn btn-danger pull-right'>Signaler</button>
	        </form>
	        <a class='repondre btn btn-primary pull-right'>Répondre</a>
	                <div class='commentaireReponse'>
			<form action='index.php?p=chapitres.addCom3' method='post' class='form-horizontal'>
				<fieldset>

					<!-- Form Name -->
					<legend>Ajouter un commentaire</legend>
					<input type='hidden' name='id_chapitre' value='$chapitre->id'>
					<input type='hidden' name='commentaire2_id' value='$commentaire2->id '>
					<!-- Textarea -->
					<div class='form-group'>
					  <label class='col-md-4 control-label' for='textarea'>Votre commentaire :</label>
					  <div class='col-md-4'>                     
					    <textarea class='form-control' id='textarea' name='contenu'></textarea>
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
                </div>
        </div>
";
							foreach ($commentaires3 as $commentaire3) {
								if ($commentaire3->commentaire2_id === $commentaire2->id) {
echo "<div id='third.$commentaire3->id' class='com com3'>
			<p> $commentaire3->contenu; </p>
			
			<form action='index.php?p=chapitres.signaler3' method='post' style='display: inline;'>
			    <input type='hidden' name='id' value='$commentaire3->id '>
			     <input type='hidden' name='id_chapitre' value='$chapitre->id'>
			      <button type='submit' class='btn btn-danger pull-right'>Signaler</button>
			</form>
			<a class='repondre btn btn-primary pull-right'>Répondre</a>
			<div class='commentaireReponse'>
			<form action='index.php?p=chapitres.addCom3' method='post'  class='form-horizontal'>
				<fieldset>

				<!-- Form Name -->
				<legend>Ajouter un commentaire</legend>
				<input type='hidden' name='id_chapitre' value='$chapitre->id'>
				<input type='hidden' name='commentaire2_id' value='$commentaire2->id '>
				<!-- Textarea -->
				<div class='form-group'>
				  <label class='col-md-4 control-label' for='textarea'>Votre commentaire :</label>
				  <div class='col-md-4'>                     
				    <textarea class='form-control' id='textarea' name='contenu'></textarea>
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
                </div>
					</div>
		";
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
        $(".repondre").on('click',function(e){
        	e.preventDefault();
        	var commentaireReponse = $(this).next('.commentaireReponse');
        	$('.commentaireReponse').slideUp();
        	if (commentaireReponse.is(":hidden")) {
                    commentaireReponse.slideDown();
                };

        });

    });
</script>
