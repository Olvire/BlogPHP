<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class CategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Livre');
    }

    public function index(){
        $items = $this->Livre->all();
        $this->render('admin.livres.index', compact('items'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->Livre->create([
                'titre' => $_POST['titre'],
            ]);
            return $this->index();
        }
        $form = new BootstrapForm($_POST);
        $this->render('admin.livres.edit', compact('form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->Livre->update($_GET['id'], [
                'titre' => $_POST['titre'],
            ]);
            return $this->index();
        }
        $category = $this->Livre->find($_GET['id']);
        $form = new BootstrapForm($category);
        $this->render('admin.livres.edit', compact('form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Livre->delete($_POST['id']);
            return $this->index();
        }
    }

}