<?php 
require_once('connect.php');
extract($_POST);

$update = $conn->query("UPDATE `authors` set `todoname` = '{$todoname}', `description` = '{$description}', `status` = '{$status}' where id = '{$id}'");
if($update){
    $resp['status'] = 'success';
}else{
    $resp['status'] = 'failed';
    $resp['msg'] = 'An error occured while saving the data. Error: '.$conn->error;
}

echo json_encode($resp);