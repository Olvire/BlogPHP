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

        /**
     * Récupère les derniers commentaires de la category demandée
     * @param $commentaire_id int
     * @return array
     */
    public function showComment2(){
        return $this->query("
            SELECT commentaires2.id, commentaires2.contenu, commentaires2.date,commentaires2.commentaire_id
            FROM commentaires2");
    }

        /**
     * Récupère les derniers commentaires de la category demandée
     * @param $commentaire_id int
     * @return array
     */
    public function showComment3(){
        return $this->query("
            SELECT commentaires3.id, commentaires3.contenu, commentaires3.date,commentaires3.commentaire2_id
            FROM commentaires3");
    }

        /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function findWithCommentaire($id){
        return $this->query("
            SELECT commentaires.id, commentaires.contenu, commentaires.date, chapitres.titre as livre
            FROM commentaires
            LEFT JOIN chapitres ON chapitre_id = chapitres.id
            WHERE commentaires.id = ?", [$id], true);
    }


}