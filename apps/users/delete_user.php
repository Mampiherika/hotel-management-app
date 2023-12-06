<?php
require_once('./../app.php');
session_start();

if(is_get()){
    $id=$_GET['userId'];
  $query="DELETE FROM users WHERE id=:id";
$stmt=$conn->prepare($query);
$stmt->bindParam(":id",$id);
$stmt->execute();

}

