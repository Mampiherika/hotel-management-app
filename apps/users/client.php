<?php
require_once('./../app.php');
$title="Enregistrement client";
session_start();


if(is_get()){
    $typeChambre=$_GET['type_chambre'];
    $status="libre";
    $query="SELECT * FROM chambres  WHERE type=:type AND status=:status ORDER BY id DESC";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(":type",$typeChambre);
    $stmt->bindParam(":status",$status);
    $row=$stmt->execute();
    $response=array();

    if($stmt->rowCount()===0){
       die("occupé");
    }else{
        while($result=$stmt->fetch()){
            $response=$result;
        }
      echo json_encode($response); 
    }
    
}


if(is_post()){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $pays=$_POST['pays'];
    $num_carte=$_POST['num_carte'];
    $date_entre=$_POST['date_entre'];
    $date_sortie=$_POST['date_sortie'];
    $address=$_POST['address'];
    $type_chambre=$_POST['type_chambre'];
    $num_chambre=$_POST['num_chambre'];
    $nombre_lit=$_POST['nombre_lit'];
    $prix=$_POST['prix'];
    
 $query="INSERT INTO client (nom,prenom,sexe,phone,pays,numero_carte,date_entre,date_sortie,adresse,type_chambre,nombre_lit,numero_chambre,prix_journalier) VALUES(:nom,:prenom,:sexe,:phone,:pays,:numero_carte,:date_entre,:date_sortie,:adresse,:type_chambre,:nombre_lit,:numero_chambre,:prix_journalier)";
$stmt=$conn->prepare($query);
$stmt->bindParam(":nom",$nom);
$stmt->bindParam(":prenom",$prenom);
$stmt->bindParam(":sexe",$gender);
$stmt->bindParam(":phone",$phone);
$stmt->bindParam(":pays",$pays);
$stmt->bindParam(":numero_carte",$num_carte);
$stmt->bindParam(":date_entre",$date_entre);
$stmt->bindParam(":date_sortie",$date_sortie);
$stmt->bindParam(":adresse",$address);
$stmt->bindParam(":type_chambre",$type_chambre);
$stmt->bindParam(":nombre_lit",$nombre_lit);
$stmt->bindParam(":numero_chambre",$num_chambre);
$stmt->bindParam(":prix_journalier",$prix);
$stmt->execute();

$status="Occupé";
$query="UPDATE chambres SET status=:status WHERE numero=:numero";
$stmt=$conn->prepare($query);
$stmt->bindParam(":status",$status);
$stmt->bindParam(":numero",$num_chambre);
$stmt->execute();

}

