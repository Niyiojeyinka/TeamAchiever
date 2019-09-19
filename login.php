<?php
session_start();
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Method: *");
	header('Content-Type: application/json');
$email = $_POST['email'];
$password = $_POST['password'];




require_once "Database.php";
$conn = new Database("database.json");
$users = $conn->get_all_records();



function check_if_user_exists($users,$email){
foreach ($users as $user) {
   if ($user['email'] == $email) {
   	
      return $user;

   }
}
return false;
}


if (!check_if_user_exists($users,$email)){
	//user exists

	 $data = array(
			    "error"=>1,
			    "errorMessage" => "Either Email is Incorrect or Account Not Exists",
			    "report" =>"accountnotexists"
				); 


	echo json_encode($data,true);
	}else{
		$user = check_if_user_exists($users,$email);//returned user
		  if ($user['email'] == $email && $user['password'] == $password) {
      	$_SESSION['user'] = $user;
    $data =$user;
	echo json_encode($data,true);
      }elseif ( $user['password'] != $password){

   
$data = array(
    "error"=>1,
    "errorMessage" => "Incorrect Password",
    "report"=>"incorrectdetails"
	);


	echo json_encode($data,true);
		}
        
	}



