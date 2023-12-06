<?php
require_once('./../app.php');
session_start();



if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="DELETE  FROM trava WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}