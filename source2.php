<?php 

try {

$conexion = new PDO('mysql:host=192.168.5.103;dbname=db_controlnet',
	'root',
	'csglobal2019',
	array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8')
   );
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$query     =  "SELECT * FROM Usuarios";

$statement = $conexion->prepare($query);
$statement->execute();

$result  =  $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($result);

$data = ['data'=>$result];

echo json_encode($data);

	
} catch (Exception $e) {

echo "Error: ".$e->getMessage();
	
}

 ?>