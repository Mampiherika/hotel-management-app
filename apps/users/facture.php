<?php
require_once('./../app.php');
$title="Facture";
session_start();
 $result='';
if(isset($_GET['id_fac'])){
    $id=$_GET['id_fac'];
    $query="SELECT * FROM caisse WHERE id=:id";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
   $result= $stmt->fetch();

}




view('users/facture',$result);
