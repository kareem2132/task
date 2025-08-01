<?php 
header("Content-Type:application/json");
header("Access-control-Allow-Origin:*");
if($_SERVER["SERVER_NAME"]=='127.0.0.1'){
$data=["massege"=>"please change domain!","connection"=>false];
echo json_encode($data);}else{
$data=["student"=>[[
    "name"=>"karim",
    "age"=>20,
    "email"=>"karim@g.c",
],[
    "name"=>"kemo",
    "age"=>30,
    "email"=>"kemo@g.c"
]],
"connection"=>true];
echo json_encode($data);

}