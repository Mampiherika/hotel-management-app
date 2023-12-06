<?php
require_once('./../app.php');
$title="trava";
session_start();

if(is_post()){
    $nom=$_POST['nom_trava'];
    $prenom=$_POST['prenom_trava'];
    $gender=$_POST['gender_trava'];
    $phone=$_POST['phone_trava'];
    $civilite=$_POST['civilite'];
    $date_naissance=$_POST['date_naissance'];
    $poste=$_POST['poste_trava'];
    $address_trava=$_POST['address_trava'];
    $num_cart_trava=$_POST['num_cart_trava'];
    $salaire=$_POST['salaire'];


    $query="SELECT nom,prénom FROM trava WHERE nom=:nom AND prénom=:prenom";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(":nom",$nom);
    $stmt->bindParam(":prenom",$prenom);
    $stmt->execute();
    if($stmt->rowCount()>0){
        die("Travailleur déjà existe");



    }else{
        $query="INSERT INTO trava (nom,prénom,sexe,phone,civilité,date_naissance,poste,adresse,num_carte,salaire) 
                         VALUES(:nom,:prenom,:sexe,:phone,:civilite,:date_naissance,:poste,:adresse,:num_carte,:salaire) ";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(":nom",$nom);
        $stmt->bindParam(":prenom",$prenom);
        $stmt->bindParam(":sexe",$gender);
        $stmt->bindParam(":phone",$phone);
        $stmt->bindParam(":civilite",$civilite);
        $stmt->bindParam(":date_naissance",$date_naissance);
        $stmt->bindParam(":poste",$poste);
        $stmt->bindParam(":adresse",$address_trava);
        $stmt->bindParam(":num_carte",$num_cart_trava);
        $stmt->bindParam(":salaire",$salaire);
        $stmt->execute();

    
    


    }


    

  









}