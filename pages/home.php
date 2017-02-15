<h1>Je suis la home</h1>
<?php 
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$base = "blog";


        $pdo = new PDO('mysql:host='.$host.';dbname='.$base,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	$resultat = $pdo->query('SELECT * FROM article');
	$data = $resultat->fetchAll(PDO::FETCH_OBJ);
	var_dump($data[0]->titre);
 ?>