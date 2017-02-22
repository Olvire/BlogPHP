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
        $form = new BootstrapForm($chapitres);
        $this->render('chapitres.livre', compact('chapitres', 'livres', 'livre','form'));
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

    public function show(){
        $chapitre = $this->Chapitre->findWithLivre($_GET['id']);
        $this->render('chapitres.show', compact('chapitre'));
    }

}