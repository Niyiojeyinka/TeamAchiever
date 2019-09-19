<?php

/*
**Design /UI/UX: 
**Frontend:
**Backend:ojeyinka olaniyi

*/

$url_array =explode("/", $_SERVER['REQUEST_URI']);
//am getting the link details here and i split with "/"

$indexOfIndexPHP = array_search("api.php", $url_array);
//get position of api.php in the link incase the tester test using deep folder

//routing

if (array_key_exists($indexOfIndexPHP+1, $url_array) &&  $url_array[$indexOfIndexPHP+1] !="") {
	//if url as first parameter and the parameter is not /

	switch ( $url_array[$indexOfIndexPHP+1]) {
		case 'login':
			require_once "login.php";
			break;
		case 'register':
			require_once "register.php";
			break;
			case 'dashboard':
			require_once "dashboard.php";
			break;
			case 'logout':
			require_once "Logout.php";
			break;
			default:
			echo "404";

	}

}else{
	//home

	echo "Home here";
}
/*
if ($url_array[$indexOfIndexPHP+1]){
	echo '$url_array[$indexOfIndexPHP+1]';
}
*/






 ?>
