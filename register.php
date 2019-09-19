<?php
/*
**Design /UI/UX: 
**Frontend:
**Backend:niyiojeyinka
*/
session_start();
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Method: *");
	header('Content-Type: application/json');
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];


require_once "Database.php";
$conn = new Database("database.json");
$users = $conn->get_all_records();


if(empty($email)|| empty($password)){


	$data = array(
    "error"=>1,
    "errorMessage" => "Email and password can not be empty",
    "report"=>"emptyemailorpassword"
	);

	 
	echo json_encode($data,true);


}else{




function check_if_user_exists($users,$userEmail){
//check if user exists already or not and returns boolean value 
	//accordingly

foreach ($users as $user) {

      if ($user['email'] == $userEmail) {
      	return true;

      }

	}
	  return false;
}


if(check_if_user_exists($users,$email)){
	
	$data = array(
    "error"=>1,
    "errorMessage" => "Email Exist already",
    "report"=>"emailExists"
	);
	  
	echo json_encode($data,true);


}else{

	$newRecord = array(
		
        "username" => $username,
        "email"=>$email,  
        "password" => $password    
);
	$conn->insert($newRecord);
	$data = array(
    "error"=>0,
    "successMessage" => "New Account Registered",
    "report" =>"registered"
	);

foreach ($users as $user){

      if ($user['email'] == $email){
      	$_SESSION['user'] = $user;
        break;
      }

	}
	 
	echo json_encode($data,true); 
}

	

}
