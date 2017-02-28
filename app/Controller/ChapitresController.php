<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\HTML\BootstrapForm;

class ChapitresController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Chapitre');
        $this->loadModel('Livre');
        $this->loadModel('Commentaire');
        $this->loadModel('Commentaire2');
        $this->loadModel('Commentaire3');
    }

    public function index(){
        $page = 1;
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $parPage = 3;
        $nbrPages = ceil(count($this->Chapitre->nbrChapitres())/$parPage);
        $chapitres = $this->Chapitre->last($page,$parPage);
        $livres = $this->Livre->all();
        $this->render('chapitres.index', compact('chapitres', 'livres','nbrPages'));
    }

    public function livres(){
        $livre = $this->Livre->find($_GET['id']);
        if($livre === false){
            $this->notFound();
        }
        $page = 1;
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $parPage = 3;
        $nbrPages = ceil(count($this->Chapitre->nbrChapitresParLivre($_GET['id']))/$parPage);
        $chapitres = $this->Chapitre->lastByLivre($page,$parPage,$_GET['id']);
        $livres = $this->Livre->all();
        $commentaires = $this->Commentaire->all();
        $form = new BootstrapForm($chapitres);
        $this->render('chapitres.livre', compact('chapitres', 'livres', 'livre','commentaires','form','nbrPages'));
    }

    public function commentaire(){
        $chapitre = $this->Chapitre->find($_GET['id']);
        if($chapitre === false){
            $this->notFound();
        }
        $commentaires = $this->Commentaire->showComment($_GET['id']);
        $chapitres = $this->Chapitre->all();
        $form = new BootstrapForm($chapitres);
        $this->render('chapitres.commentaire', compact('commentaires', 'chapitres', 'chapitre','form'));
    }

    public function show($id = null){
        if (!isset($id)) {
            $id = $_GET['id'];
        }
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
            $pageBefore = "index.php?p=chapitres.show&id=".$pagesBefore[0];
        } else {
            $pageBefore = "index.php?p=chapitres.show&id=".$chapitre->id;
        }
        if (isset($pagesAfter[0])) {
            $pageAfter = "index.php?p=chapitres.show&id=".$pagesAfter[count($pagesAfter)-1];
        } else {
            $pageAfter = "index.php?p=chapitres.show&id=".$chapitre->id;
        }
        $this->render('chapitres.show', compact('chapitres','chapitre','commentaires','commentaires2','commentaires3','pageBefore','pageAfter'));
    }

     public function signaler(){
        if (!empty($_POST)) {
            $result = $this->Commentaire->update($_POST['id'], [
                'signale' => true,
            ]);
            $this->show($_POST['id_chapitre']);
        }
    }

    public function signaler2(){
        if (!empty($_POST)) {
            $result = $this->Commentaire2->update($_POST['id'], [
                'signale' => true,
            ]);
            $this->show($_POST['id_chapitre']);
        }
    }

     public function signaler3(){
        if (!empty($_POST)) {
            $result = $this->Commentaire3->update($_POST['id'], [
                'signale' => true,
            ]);
            $this->show($_POST['id_chapitre']);
        }
    }

    public function addCom(){
        if (!empty($_POST)) {
            $contenu = htmlspecialchars($_POST['contenu']);
            $result = $this->Commentaire->create([
                'contenu' => $contenu,
                'chapitre_id' => $_POST['id_chapitre']
            ]);
            $this->show($_POST['id_chapitre']);
        }
    }

    public function addCom2(){
        if (!empty($_POST)) {
            $contenu = htmlspecialchars($_POST['contenu']);
            $result = $this->Commentaire2->create([
                'contenu' => $contenu,
                'chapitre_id' => $_POST['id_chapitre'],
                'commentaire_id' => $_POST['commentaire_id']
            ]);
            $this->show($_POST['id_chapitre']);
        }
    }

    public function addCom3(){
        if (!empty($_POST)) {
            $contenu = htmlspecialchars($_POST['contenu']);
            $result = $this->Commentaire3->create([
                'contenu' => $contenu,
                'chapitre_id' => $_POST['id_chapitre'],
                'commentaire2_id' => $_POST['commentaire2_id']
            ]);
            $this->show($_POST['id_chapitre']);
        }
    }
}