<?php
try {
	//$dbh = new PDO('mysql:host=localhost;dbname=c0940392_invent1','c0940392_invent1','FE33vabemi'); 
    $dbh = new PDO('mysql:host=localhost;dbname=clinica', 'root', 'jakamoto');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

    //$base_url="http://fj4x.com/clinica/";	
    $base_url="http://192.168.0.7/clinica/";	
    //echo "estoy conectado";
} catch (PDOException $e){
    die("Error: ".$e->getMessage());
}
?>