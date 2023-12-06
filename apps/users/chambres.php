<?php
require_once('./../app.php');
$title="Enregistrement Chambres";
session_start();
if(is_post()){
   
    $numero_chambre=$_POST['numChambres'];
    $type_chambre=$_POST['typeChambres'];
    $lit=$_POST['lit'];
    $price=$_POST['price'];

    $query="SELECT numero FROM chambres WHERE numero=:numero";

   $stmt= $conn->prepare($query);
     $stmt->bindParam(":numero",$numero_chambre);
      $stmt->execute();
   if($stmt->rowCount()===0){
   
     $query="INSERT INTO chambres (numero,type,lit,prix) VALUES(:numero,:type,:lit,:prix)";
    $stmt=$conn->prepare($query);
     $stmt->bindParam(":numero",$numero_chambre);
      $stmt->bindParam(":type",$type_chambre);
       $stmt->bindParam(":lit",$lit);
        $stmt->bindParam(":prix",$price);
         $stmt->execute();
   }else{

          die("Numero de chambres déjà existé");
   }

   
   

   
}





die();
