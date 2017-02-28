<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use \Core\Auth\DBAuth;

class CommentairesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Chapitre');
        $this->loadModel('Livre');
        $this->loadModel('Commentaire');
        $this->loadModel('Commentaire2');
        $this->loadModel('Commentaire3');
    }

    public function moderer(){
        if (!empty($_POST)) {
            $result = $this->Commentaire->update($_POST['id_commentaire'], [
                'contenu' => "Ce commentaire a été modéré par l'administrateur.",
                'signale' => false
            ]);
            if($result){
                return $this->show($_POST['id']);
            }
        }
    }

     public function moderer2(){
        if (!empty($_POST)) {
            $result = $this->Commentaire2->update($_POST['id_commentaire2'], [
                'contenu' => "Ce commentaire à été modéré par l'administrateur.",
                'signale' => false
            ]);
            if($result){
                return $this->show($_POST['id']);
            }
        }
     }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Commentaire->delete($_POST['id_commentaire']);
            return $this->show($_POST['id']);
        }
    }

    public function delete2(){
        if (!empty($_POST)) {

            $result = $this->Commentaire2->delete($_POST['id_commentaire2']);
            return $this->show($_POST['id']);
        }
    }

     public function delete3(){
        if (!empty($_POST)) {
            $result = $this->Commentaire3->delete($_POST['id_commentaire3']);
            return $this->show($_POST['id']);
        }
    }

        public function show($id = null){
        if (!isset($id)) {
            $id = $_GET['id'];
        }
        $token = $_SESSION['token'];
        $chapitre = $this->Chapitre->findWithLivre($id);
        $chapitres = $this->Chapitre->allLivre($chapitre->livre_id);
         $commentaires = $this->Commentaire->showComment($id);
         $commentaires2 = $this->Commentaire->showComment2();
         $commentaires3 = $this->Commentaire->showComment3();
         $pagesAfter=[];
         $pagesBefore=[];
         foreach ($chapitres as $Chapitre) {
            if ($Chapitre->id > $chapitre->id) {
                $pagesAfter[]=$Chapitre->id;
            } elseif ($Chapitre->id < $chapitre->id) {
                $pagesBefore[]=$Chapitre->id;
            }
        }
        if (isset($pagesBefore[0])) {
            $pageBefore = "index.php?p=admin.chapitres.show&id=".$pagesBefore[0];
        } else {
            $pageBefore = "index.php?p=admin.chapitres.show&id=".$chapitre->id;
        }
        if (isset($pagesAfter[0])) {
            $pageAfter = "index.php?p=admin.chapitres.show&id=".$pagesAfter[count($pagesAfter)-1];
        } else {
            $pageAfter = "index.php?p=admin.chapitres.show&id=".$chapitre->id;
        }
        $this->render('admin.chapitres.show', compact('chapitres','chapitre','commentaires','commentaires2','commentaires3','pageBefore','pageAfter','token'));
    }

}