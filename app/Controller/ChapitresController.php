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
    }

    public function index(){
        $chapitres = $this->Chapitre->last();
        $livres = $this->Livre->all();
        $this->render('chapitres.index', compact('chapitres', 'livres'));
    }

    public function livres(){
        $livre = $this->Livre->find($_GET['id']);
        if($livre === false){
            $this->notFound();
        }
        
        $chapitres = $this->Chapitre->lastByLivre($_GET['id']);
        $livres = $this->Livre->all();
        $commentaires = $this->Commentaire->all();
        $form = new BootstrapForm($chapitres);
        $this->render('chapitres.livre', compact('chapitres', 'livres', 'livre','commentaires','form'));
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
        $chapitres = $this->Chapitre->lastByLivre($chapitre->livre_id);
         $commentaires = $this->Commentaire->showComment($id);
         $commentaires2 = $this->Commentaire->showComment2();
         $commentaires3 = $this->Commentaire->showComment3();
        $this->render('chapitres.show', compact('chapitres','chapitre','commentaires','commentaires2','commentaires3'));
    }

     public function signaler(){
        if (!empty($_POST)) {
            $result = $this->Commentaire->update($_POST['id'], [
                'signale' => true,
            ]);
            $this->show($_POST['id_chapitre']);
        }
    }

}