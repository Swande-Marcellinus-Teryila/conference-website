<?php  
$username='root';
$password='';
$dsn='mysql:host=localhost;dbname=conference_data';
try {
	$con= new PDO($dsn,$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
//echo $e->getMessage();

}

?>