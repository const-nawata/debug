<?php
define( '_log_path', '../logs/api.log' );

require_once '../log.php';



// required headers
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");

$data	= [
	'success'	=> true,
	'data'	=> 'Dummy data'
];


if( !log_message('error',print_r( $data ,1))){
	$data['success']	= false;
}


echo json_encode($data);