<?php
  
    $json['name'] = $_POST['name'];
    $json['password'] =$_POST['password'];
    
    echo json_encode($json);
    die;

?>