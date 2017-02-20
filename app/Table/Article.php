<?php 
namespace App\Table;
use App\App;

/**
* 
*/
class Article extends Table
{

	public static function getLast(){
		return App::getDb()->query("SELECT article.id,article.titre,article.contenu,categorie.titre as categorie FROM article LEFT JOIN categorie ON categorie_id=categorie.id", __CLASS__);
	}
	
	public function getUrl(){
		return 'index.php?p=post&id=' . $this->id;
	}

	public function getExtrait() {
		$html = '<p>' . substr($this->contenu, 0, 250) . '...<p>';
		$html .= '<p><a href="' .$this->getURL() . '">Voir la suite</a></p>';
		return $html;
	}
}