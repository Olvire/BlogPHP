<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class ChapitresController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Chapitre');
    }

    public function index(){
        $chapitres = $this->Chapitre->all();
        $this->render('admin.chapitres.index', compact('chapitres'));
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
        if (!empty($_POST)) {
            $result = $this->Chapitre->delete($_POST['id']);
            return $this->index();
        }
    }

}