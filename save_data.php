<?php 
require_once('connect.php');
extract($_POST);

$query = $conn->query("INSERT INTO `authors` (`todoname`,`description`,`status`) VALUE ('{$todoname}','{$description}','{$status}')");
if($query){
    $resp['status'] = 'success';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);