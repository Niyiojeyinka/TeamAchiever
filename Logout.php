<?php
session_start();
 header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Method: *");
    header('Content-Type: application/json');

unset($_SESSION['user']);
  $data = array(
    "error"=>0,
    "successMessage" => "User Logged out Successfully",
    "report" =>"logged_out"
    );

    echo json_encode($data,true);