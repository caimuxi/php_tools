<?php
$action = ($_GET['action']) ? $_GET['action'] : 'index';

$str = ($_GET['str']) ? $_GET['str'] : '';
if(!$str) exit($str);
$action($str);
function indexAction(){

}

function urlencodeAction($str){
	echo urldecode($str);exit;
}

function jsonAction(){
	echo json_decode($str);exit;
}

function timestampAction($str){
	echo date('Y-m-d H:i:s',$str);exit;
}

?>



