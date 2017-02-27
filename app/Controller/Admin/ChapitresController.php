<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use \Core\Auth\DBAuth;

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
        $this->render('admin.chapitres.index', compact('chapitres', 'livres','nbrPages'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Chapitre->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'livre_id' => $_POST['livre_id']
            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Livre');
        $livres = $this->Livre->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.chapitres.edit', compact('livres', 'form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Chapitre->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'livre_id' => $_POST['livre_id']
            ]);
            if($result){
                return $this->index();
            }
        }
        $post = $this->Chapitre->find($_GET['id']);
        $this->loadModel('Livre');
        $livres = $this->Livre->extract('id', 'titre');
        $form = new BootstrapForm($post);
        $this->render('admin.chapitres.edit', compact('livres', 'form'));
    }

    public function delete(){
        if (!empty($_POST) && isset($_SESSION['token'])) {
            $result = $this->Chapitre->delete($_POST['id']);
            return $this->index();
        }
    }
    public function deconect(){
        if (isset($_SESSION['auth'])) {
            unset($_SESSION['auth']);
        }
        $this->render('admin.deconect');
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
        $this->render('admin.livres.show', compact('chapitres', 'livres', 'livre','commentaires','form','nbrPages'));
    }
}