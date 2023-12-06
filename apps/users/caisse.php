<?php
require_once('./../app.php');
$title="Caisse";
session_start();
$user_type = '';
if(isset($_GET['user_type'])){
$user_type = $_GET['user_type'];
}

if(is_get()){
    $numero=$_GET['numero_chambre'];
    $query="SELECT * FROM client WHERE numero_chambre LIKE :numero_chambre ";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(":numero_chambre",$numero);
    $stmt->execute();
    if($stmt->rowCount()===0){
        die("aucun");
    }else{
        $response=array();
    while($row=$stmt->fetch()){
        $response=$row;
    }
    echo json_encode($response);
    }
    
}


if(is_post()){
    $nom=$_POST['nom_caisse'];
    $prenom=$_POST['prenom_caisse'];
    $phone=$_POST['phone_caisse'];
    $pays=$_POST['pays_caisse'];
    $num_carte=$_POST['num_carte_caisse'];
    $date_entre=trim($_POST['date_entre_caisse']);
    $date_sortie=trim($_POST['date_sortie_caisse']);
    $address=$_POST['address_caisse'];
    $type_chambre=$_POST['type_chambre_caisse'];
    $num_chambre=$_POST['num_chambre_caisse'];
    $prix=$_POST['prix_caisse'];
    $nb_jour=$_POST['nombre_jour'];
    $prix_total=$_POST['total_payement'];
    $date_payement=$_POST['date_payement'];
    
 $query="INSERT INTO caisse (nom,prenom,phone,num_carte,pays,date_entre,date_sortie,prix_journalier,nombre_jour,num_chambre,adresse,total_payer,date_payement) VALUES(:nom,:prenom,:phone,:num_carte,:pays,:date_entre,:date_sortie,:prix_journalier,:nombre_jour,:num_chambre,:adresse,:total_payement,:date_payement)";

$stmt=$conn->prepare($query);
$stmt->bindParam(":nom",$nom);
$stmt->bindParam(":prenom",$prenom);
$stmt->bindParam(":phone",$phone);
$stmt->bindParam(":num_carte",$num_carte);
$stmt->bindParam(":pays",$pays);
$stmt->bindParam(":date_entre",$date_entre);
$stmt->bindParam(":date_sortie",$date_sortie);
$stmt->bindParam(":prix_journalier",$prix);
$stmt->bindParam(":nombre_jour",$nb_jour);
$stmt->bindParam(":num_chambre",$num_chambre);
$stmt->bindParam(":adresse",$address);
$stmt->bindParam(":total_payement",$prix_total);
$stmt->bindParam(":date_payement",$date_payement);
$success=$stmt->execute();

if($success){
    // update chambre after payement

$status="libre";
$query="UPDATE chambres SET status=:status WHERE numero=:numero";
$stmt=$conn->prepare($query);
$stmt->bindParam(":status",$status);
$stmt->bindParam(":numero",$num_chambre);
$stmt->execute();
//delete client after payement

$query="DELETE  FROM client WHERE numero_chambre=:numero";
$stmt=$conn->prepare($query);
$stmt->bindParam(":numero",$num_chambre);
$stmt->execute();



}

  

}
