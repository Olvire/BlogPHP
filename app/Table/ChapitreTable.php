<?php
namespace App\Table;

use Core\Table\Table;

class ChapitreTable extends Table{

    protected $table = 'chapitres';

    /**
     * Récupère le nombre de chapitres
     * @return array
     */
    public function nbrChapitres(){
        return $this->query("SELECT chapitres.id FROM chapitres");
    }

    /**
     * Récupère les derniers chapitres
     * @return array
     */
    public function last($page,$parPage){
        return $this->query("
            SELECT chapitres.id, chapitres.titre, chapitres.contenu, chapitres.date, livres.titre as livre
            FROM chapitres
            LEFT JOIN livres ON livre_id = livres.id
            ORDER BY chapitres.id DESC LIMIT ".(($page-1)*$parPage).",$parPage");
    }

    /**
     * Récupère les derniers chapitre du livre demandée
     * @param $category_id int
     * @return array
     */
    public function lastByLivre($page,$parPage,$livre_id){
        return $this->query("
            SELECT chapitres.id, chapitres.titre, chapitres.contenu, chapitres.date, livres.titre as livre
            FROM chapitres
            LEFT JOIN livres ON livre_id = livres.id
            WHERE chapitres.livre_id = ?
            ORDER BY chapitres.id DESC LIMIT ".(($page-1)*$parPage).",$parPage", [$livre_id]);
    }

    /**
     * Récupère les derniers chapitre du livre demandée
     * @param $category_id int
     * @return array
     */
    public function nbrChapitresParLivre($livre_id){
        return $this->query("
            SELECT chapitres.id
            FROM chapitres
            LEFT JOIN livres ON livre_id = livres.id
            WHERE chapitres.livre_id = ?
            ORDER BY chapitres.id DESC", [$livre_id]);
    }

    /**
     * Récupère les derniers chapitre du livre demandée
     * @param $category_id int
     * @return array
     */
    public function allLivre($livre_id){
        return $this->query("
            SELECT chapitres.id, chapitres.titre, chapitres.contenu, chapitres.date, livres.titre as livre
            FROM chapitres
            LEFT JOIN livres ON livre_id = livres.id
            WHERE chapitres.livre_id = ?
            ORDER BY chapitres.id DESC", [$livre_id]);
    }

    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ChapitreEntity
     */
    public function findWithLivre($id){
        return $this->query("
            SELECT chapitres.id, chapitres.titre, chapitres.contenu, chapitres.date, chapitres.livre_id, livres.titre as livre
            FROM chapitres
            LEFT JOIN livres ON livre_id = livres.id
            WHERE chapitres.id = ?", [$id], true);
    }
}