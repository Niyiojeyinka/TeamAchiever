<?php
session_start();
 header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Method: *");
    header('Content-Type: application/json');


if (isset($_SESSION['user'])) {
    //remove the password before sending it to frontend
    unset($_SESSION['user']['password']);

    $data = array(
    'error' => 0,
    'user'=>$_SESSION['user']
    );

    echo json_encode($data,true);
}else{


     $data = array(
    "error"=>1,
    "errorMessage" => "You are not Logged In",
    "report" =>"logged_out"
    );
    echo json_encode($data,true);
}


