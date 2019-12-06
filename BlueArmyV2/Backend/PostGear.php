<?php
include __DIR__.'../GearControl.php';
 

header('Content-type: application/json');

$data = file_get_contents('php://input');
$obj =  json_decode($data);

if(!empty($data)){	
	try {
 		$gearControl = new GearControl();
 		$gearControl->insert($obj);
 		http_response_code(200);
 		echo json_encode($obj);
 	}
 	catch (PDOException $e) {
 		http_response_code(400);
 		echo $e->getMessage();
		echo json_encode(array("mensagem" => "Parametros Invalidos"));
	}
}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Nao foram enviados parametros"));
}


?>