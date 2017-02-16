<?php 
namespace App\Table;
use App\App;

/**
* 
*/
class Article
{

	public static function getLast(){
		return App::getDb()->query('SELECT * FROM article', __CLASS__);
	}


	public function __get($key){

		$method = 'get' . ucfirst($key);
		$this->$key = $this->$method();
		return $this->$key;
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