
<div class="row">
	<div class="col-xs-12 chapitre">
	<h1>Administration <a href="?p=admin.chapitres.deconect" class="btn btn-danger pull-right">Se déconecter</a><a href="index.php?p=admin.chapitres.index" class="btn btn-info pull-right" style="margin-right: 1em">Retour</a></h1>
		<h2><?= $chapitre->titre; ?></h2>
		
		<p><em><?= $chapitre->livre; ?></em></p>
		
		<p><?= $chapitre->contenu; ?></p>
		
	</div>
	
	        <div class="col-xs-12 bar-bottom">
	        	<div class="tab-right pull-right">
	        	<a href="#" id="commentaires-bouton">
	        	       <i class="icon icon-arrow-circle-left"></i>
	        	       <span>Commentaires</span>
	        	   </a>
	        	   <a href="#" id="commentaires-signales-bouton">
	        	       <i class="icon icon-arrow-circle-left"></i>
	        	       <span>Commentaires signalés</span>
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

	<?php if ($commentaires === false) {
			echo "<p>Pas de commentaires</p>";
			} else {
				foreach ($commentaires as $commentaire) {
echo "<div id='first.$commentaire->id' class='com com1'>
		 <p>$commentaire->contenu</p> 
 			
 			<div class='pull-right'>
                    <form action='?p=admin.commentaires.moderer&token=$token' method='post' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire' value='$commentaire->id'>
                        <button type='submit' class='btn btn-danger'>Modérer</button>
                    </form>
            </div>
             <div class='pull-right'>
                    <form action='?p=admin.commentaires.delete&token=$token' method='post' name='$commentaire->id' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire' value='$commentaire->id'>
                        <button type='submit' class='btn btn-danger btn-supprimer '>Supprimer</button>
                    </form>
            </div>
       </div>            
";
					foreach ($commentaires2 as $commentaire2) {
						if ($commentaire2->commentaire_id === $commentaire->id) {
echo "<div id='second.$commentaire2->id' class='com com2'>
		<p> $commentaire2->contenu </p>
			
			<div class='pull-right'>
                    <form action='?p=admin.commentaires.moderer2&token=$token' method='post' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire2' value='$commentaire2->id'>
                        <button type='submit' class='btn btn-danger'>Modérer</button>
                    </form>
            </div>
            <div class='pull-right'>
                    <form action='?p=admin.commentaires.delete2&token=$token' method='post' name='second$commentaire2->id' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire2' value='$commentaire2->id'>
                        <button type='submit' class='btn btn-danger btn-supprimer '>Supprimer</button>
                    </form>
            </div>
	    </div>             
";
							foreach ($commentaires3 as $commentaire3) {
								if ($commentaire3->commentaire2_id === $commentaire2->id) {
echo "<div id='third.$commentaire3->id' class='com com3'>
			<p> $commentaire3->contenu </p>
			
			<div class='pull-right'>
                    <form action='?p=admin.commentaires.delete3&token=$token' method='post' name='form' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire3' value='$commentaire3->id'>
                        <button type='submit' class='btn btn-danger'>Supprimer</button>
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
	 <div id="commentaires-signales" class="commentaires row">

	<?php if ($commentaires === false) {
			echo "<p>Pas de commentaires</p>";
			} else {
				foreach ($commentaires as $commentaire) {
					if ($commentaire->signale) {
						echo "<div id='first.$commentaire->id' class='com com1'>
		 <p>$commentaire->contenu</p> 
 			
 			<div class='pull-right'>
                    <form action='?p=admin.commentaires.moderer&token=$token' method='post' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire' value='$commentaire->id'>
                        <button type='submit' class='btn btn-danger'>Modérer</button>
                    </form>
            </div>
            <div class='pull-right'>
                    <form action='?p=admin.commentaires.delete&token=$token' method='post' name='$commentaire->id' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire' value='$commentaire->id'>
                        <button type='submit' class='btn btn-danger btn-supprimer '>Supprimer</button>
                    </form>
            </div>
       </div>            
";
					}

					foreach ($commentaires2 as $commentaire2) {
						if (($commentaire2->commentaire_id === $commentaire->id) && ($commentaire2->signale)) {
echo "<div id='second.$commentaire2->id' class='com com2'>
		<p> $commentaire2->contenu </p>
			
			<div class='pull-right'>
                    <form action='?p=admin.commentaires.moderer2&token=$token' method='post' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire2' value='$commentaire2->id'>
                        <button type='submit' class='btn btn-danger'>Modérer</button>
                    </form>
            </div>
            <div class='pull-right'>
                    <form action='?p=admin.commentaires.delete2&token=$token' method='post' name='second$commentaire2->id' style='display: inline;'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire2' value='$commentaire2->id'>
                        <button type='submit' class='btn btn-danger btn-supprimer '>Supprimer</button>
                    </form>
            </div>
	    </div>             
";
							foreach ($commentaires3 as $commentaire3) {
								if (($commentaire3->commentaire2_id === $commentaire2->id) && ($commentaire3->signale)) {
echo "<div id='third.$commentaire3->id' class='com com3'>
			<p> $commentaire3->contenu </p>
			
			<div class='pull-right'>
                    <form action='?p=admin.commentaires.delete3&token=$token' method='post' name='form'>
                        <input type='hidden' name='id' value='$chapitre->id'>
                        <input type='hidden' name='id_commentaire3' value='$commentaire3->id'>
                        <button type='submit' class='btn btn-danger btn-supprimer '>Supprimer</button>
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
        	 $('#commentaires-signales').slideUp();
                if (commentaires.is(":hidden")) {
                    commentaires.slideDown();
                };
            });
        
        $("#commentaires-signales-bouton").on('click', function (e) { 
        	e.preventDefault();
        	 var commentaires = $('#commentaires-signales');
        	 $('#commentaires').slideUp();
        	 commentaires.slideUp();
                if (commentaires.is(":hidden")) {
                    commentaires.slideDown();
                };
            });

    });
</script>
