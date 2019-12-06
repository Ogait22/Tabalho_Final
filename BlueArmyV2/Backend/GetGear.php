<?php
include __DIR__.'../GearControl.php';

$gearControl = new GearControl();

header('Content-type: application/json');

if ($gearControl->findAll()) {
	http_response_code(200);
	echo json_encode($gearControl->findAll());


}
else {
	http_response_code(400);
	echo json_encode(array("mensagem" => "Não encontrado"));
}
