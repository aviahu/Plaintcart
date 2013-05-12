<?php
require_once '../library/config.php';
require_once '../library/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content 	= 'list.php';		
		$pageTitle 	= 'Shop Admin Control Panel - ������� ����������';
		break;

	case 'add' :
		$content 	= 'add.php';		
		$pageTitle 	= 'Shop Admin Control Panel - �������� ����������';
		break;

	case 'modify' :
		$content 	= 'modify.php';		
		$pageTitle 	= 'Shop Admin Control Panel - ����������� ����������';
		break;

	default :
		$content 	= 'list.php';		
		$pageTitle 	= 'Shop Admin Control Panel - ������� ����������';
}


$script    = array('category.js');

require_once '../include/template.php';
?>
