<?php
header("Access-Control-Allow-Origin: *");

/* define('PASTAPROJETO', ''); */
define('PASTAPROJETO', 'BlueArmyV2');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
	$method = $_SERVER['REQUEST_METHOD'];
	switch ($method) {
		case 'PUT':
		$answer = "Update";
		break;
		case 'POST':	  
		$answer = "Post";
		break;
		case 'GET':
		$answer = "Get";
		break;
		case 'DELETE':
		$answer = "Delete";
		break;	
		default:
		handle_error($method);  
		break;
	}
	return $answer;
}

$request = $_SERVER['REQUEST_URI']; // IDENTIFICA A URI DA REQUISIÇÃO

$answer = checkRequest();

switch ($request) {
	case '/'.PASTAPROJETO:
	require __DIR__ . '/Backend/gear.php';
	break;
	case '/'.PASTAPROJETO.'/' :
	require __DIR__ . '/Backend/gear.php';
	break;
	case '' :
	require __DIR__ . '/Backend/gear.php';
	break;
	case '/'.PASTAPROJETO.'/Backend/gear' :
	require __DIR__ . '/'.$answer.'Gear.php';
	break;
	default:
        //require __DIR__ . '/api/404.php';
	break;
}