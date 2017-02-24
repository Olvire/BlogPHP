<?php
namespace App\Table;

use Core\Table\Table;

class ChapitreTable extends Table{

    protected $table = 'chapitres';

    /**
     * Récupère les derniers article
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT chapitres.id, chapitres.titre, chapitres.contenu, chapitres.date, livres.titre as livre
            FROM chapitres
            LEFT JOIN livres ON livre_id = livres.id
            ORDER BY chapitres.id DESC");
    }

    /**
     * Récupère les derniers articles de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByLivre($livre_id){
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
     * @return \App\Entity\PostEntity
     */
    public function findWithLivre($id){
        return $this->query("
            SELECT chapitres.id, chapitres.titre, chapitres.contenu, chapitres.date, chapitres.livre_id, livres.titre as livre
            FROM chapitres
            LEFT JOIN livres ON livre_id = livres.id
            WHERE chapitres.id = ?", [$id], true);
    }
}