<?php
namespace App\Table;

use Core\Table\Table;

class CommentaireTable extends Table{

    protected $table = "commentaires";

     /**
     * Récupère les derniers commentaires de la category demandée
     * @param $chapitre_id int
     * @return array
     */
    public function showComment($chapitre_id){
        return $this->query("
            SELECT commentaires.id, commentaires.contenu, commentaires.date, chapitres.titre as chapitre
            FROM commentaires
            LEFT JOIN chapitres ON chapitre_id = chapitres.id
            WHERE commentaires.chapitre_id = ?
            ORDER BY commentaires.date DESC", [$chapitre_id]);
    }


}