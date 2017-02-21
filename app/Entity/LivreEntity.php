<?php
namespace App\Entity;

use Core\Entity\Entity;

class LivreEntity extends Entity{

    public function getUrl(){
        return 'index.php?p=chapitres.livres&id=' . $this->id;
    }

}