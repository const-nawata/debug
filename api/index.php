<?php
define( '_log_path', '../logs/api.log' );
require_once '../log.php';

// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");
header("Accept: application/json; charset=UTF-8");

$uriparts	= explode('/', trim($_SERVER['REQUEST_URI'],'/'));

//INFO: Don't delete commented values (indexes). They might be useful in the future.
$data	= [
	'success'	=> false,
	'message'	=> 'Request failed.',
//	'data'		=> 'Index data',
//	'form_post'	=> $_POST,													//	 It is how to get Postman FORM variables!!!
//	'json_post'	=> json_decode(file_get_contents("php://input"), true),		//	 It is how to get Postman row JSON body!!!
//	'request'	=> $_REQUEST,
	'uriparts'	=> $uriparts,
//	'get'		=> $_GET,
//	'server'	=> $_SERVER
];

//header('Location: http://api.tst.tst/users.php/');

if(in_array( 'user', $uriparts )){

	echo json_encode([
		'success'	=> true,

		'data' => [
		'id'		=> 10014,
		'username'	=> 'testuser01',
		'firstname'	=> 'Camilla',
		'lastname'	=> 'Morrow'
		]
	]);
	return true;
}else{
	header("HTTP/1.1 405 Method nof found.");
	echo json_encode($data);
}
