<?php 

require '../app/Autoloader.php';

App\Autoloader::register();



if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	$id = 'home';
}
	ob_start();
	switch ($id) {

		case 'home':
		require '../pages/home.php';
		break;

		case '1':
		require '../pages/home.php';
		break;



}
$content = ob_get_clean();

require '../pages/templates/default.php';