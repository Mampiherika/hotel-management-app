<?php
require_once('./../app.php');
session_start();
$title="Client";

if(is_get()){
    $id=$_GET['updateSend'];
    $sql="SELECT * FROM trava WHERE id=:id";
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


if(is_post()){
    $uniqueId=$_POST['hiddenId'];
    $phone=$_POST['updateTelephone'];
    $poste=$_POST['updatePoste'];
    $adresse=$_POST['updateAdresse'];
    $num_carte=$_POST['updateNumero_de_la_carte'];
    $salaire=$_POST['updateSalaire'];

    $sql="UPDATE trava SET phone=:phone, poste=:poste,adresse=:adresse,num_carte=:num_carte,salaire=:salaire WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":phone",$phone);
    $stmt->bindParam(":poste",$poste);
    $stmt->bindParam(":adresse",$adresse);
    $stmt->bindParam(":num_carte",$num_carte);
    $stmt->bindParam(":salaire",$salaire);
    $stmt->bindParam(":id",$uniqueId);
    $stmt->execute();
    echo print_r($_POST);
}