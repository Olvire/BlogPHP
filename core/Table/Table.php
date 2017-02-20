<?php 
namespace Core\Table;
use App\App;

/**
* 
*/
class Table
{

	protected static $table;

	private static function getTable(){

		if(static::$table === null) {
			static::$table = get_called_class();
		}
		return static::$table;
	}

	public static function all(){
		return App::getDb()->query("
			SELECT *
			 FROM " . static::getTable() ."
			  ", get_called_class());
	}


	public function __get($key){

		$method = 'get' . ucfirst($key);
		$this->$key = $this->$method();
		return $this->$key;
	}
	
}