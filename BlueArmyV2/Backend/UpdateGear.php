<?php
include __DIR__.'/../Backend/GearControl.php';

$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;

$id = $obj->id;

if(!$id) {
	http_response_code(400);
	echo json_encode(array("mensagem" => "É necessário um ID para atualização"));
}
else {
	if(!empty($data)){	
		$conteudoControl = new GearControl();
		$conteudoControl->update($obj , $id);
	}
}

?>