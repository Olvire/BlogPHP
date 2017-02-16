<?php 

require '../app/Autoloader.php';

App\Autoloader::register();



if (isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'home';
}


	ob_start();
	switch ($p) {

		case 'home':
		require '../pages/home.php';
		break;

		case 'post':
		require '../pages/post.php';
		break;



}
$content = ob_get_clean();

require '../pages/templates/default.php';