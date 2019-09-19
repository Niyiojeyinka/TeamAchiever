<?php

//echo var_dump(json_decode("[]",true));

echo var_dump(json_encode(
array(
array("firstname" =>"john",
"lastname" => "Doe",
"email"=> "john@gmail.com",
"password" => "joepass" 
),
array("firstname" =>"paul",
"lastname" => "allen",
"email"=> "john@gmail.com",
"password" => "paulpass" 
),

array("firstname" =>"Bill",
"lastname" => "gates",
"email"=> "john@gmail.com",
"password" => "billpass" 
)
)


));