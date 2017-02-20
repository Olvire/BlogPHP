<?php 
namespace App\Table;

use App\App;

class Categorie extends Table{

	protected static $table = 'categorie';

	public static function all(){
		return App::getDb()->query("
			SELECT *
			 FROM " . self::$table ."
			  ", __CLASS__);
	}
	public function getUrl(){
		return 'index.php?p=categorie&id=' . $this->id;
	}

}