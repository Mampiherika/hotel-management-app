<?php
require_once('./../app.php');
session_start();
$title="Client";


if(isset($_POST['deleteSend'])){
    $id=$_POST['deleteSend'];
    $sql="DELETE  FROM chambres WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
}

