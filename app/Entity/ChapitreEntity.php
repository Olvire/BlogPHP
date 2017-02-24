<?php
namespace App\Entity;

use Core\Entity\Entity;

class ChapitreEntity extends Entity{

	public function getUrlAdmin(){
		return 'index.php?p=admin.chapitres.show&id=' . $this->id;
	}

    public function getUrl(){
        return 'index.php?p=chapitres.show&id=' . $this->id;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 300) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }

}