<?php
require_once('./../app.php');
session_start();
$title="Client";

if(isset($_GET['updateSend'])){
    $id=$_GET['updateSend'];
    $sql="SELECT * FROM chambres WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $response=Array();
    while($result=$stmt->fetch()){
    $response=$result;
    }
    echo json_encode($response);
    
}else{
    $response['status']=200;
    $response['message']="invalid or data not found";
}


if(isset($_POST['hiddenId'])){
    $uniqueId=$_POST['hiddenId'];
    $numero=$_POST['updateNumero'];
    $type=$_POST['updateType'];
    $lit=$_POST['updateLit'];
    $prix=$_POST['updatePrix'];

    $sql="UPDATE chambres SET numero=:numero, type=:type,lit=:lit,prix=:prix WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":numero",$numero);
    $stmt->bindParam(":type",$type);
    $stmt->bindParam(":lit",$lit);
    $stmt->bindParam(":prix",$prix);
    $stmt->bindParam(":id",$uniqueId);
    $stmt->execute();
    echo print_r($_POST);
}
