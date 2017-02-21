<?php
namespace App\Table;

use Core\Table\Table;

class CommentaireTable extends Table{

    protected $table = "commentaires";

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
            ORDER BY chapitres.date DESC", [$livre_id]);
    }


}