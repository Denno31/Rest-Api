<?php
header('Access-Control-Allow-Origin: *');
header('Access-control-Allow-Methods: POST, GET, DELETE, PUT');

$method = $_SERVER['REQUEST_METHOD'];

$request_uri = $_SERVER['REQUEST_URI'];

$tables = ['posts'];

$url = rtrim($request_uri,'/');

$url = filter_var($request_uri, FILTER_SANITIZE_URL);

$url = explode('/', $url);

$tableName = (string) $url[3];


if($url[4] !=null){
    $id = (int) $url[4];
}
else{
    $id = null;
}
if(in_array($tableName, $tables)){
  include_once './Classes/Database.php';
  include_once './api/posts.php';
}else{
    echo 'table does not exist';
}