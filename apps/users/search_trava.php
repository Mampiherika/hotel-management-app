<?php
require_once('./../app.php');
session_start();

if(is_get()){
    $name=$_GET['keyword'];

    $table='<table class="table table-striped table-condensed" id="table_users" >
    <thead class="table-info "  id="table-head" >
   
    <tr class="" style="">
       <th class="text-center" >Nom</th>
        <th class="text-center" >Prénom</th>
        <th class="text-center" >Sexe</th>
        <th class="text-center" >Téléphone</th>
        <th class="text-center">civilité</th>
       <th class="text-center" >Date de Naissance</th>
        <th class="text-center" >Poste</th>
        <th class="text-center" >Adresse</th>
        <th class="text-center" >Salaire</th>
     </tr>
  
    </thead>   <tbody>';

$query="SELECT* FROM trava WHERE nom REGEXP :nom";
$stmt=$conn->prepare($query);
$stmt->bindParam(":nom",$name);
$stmt->execute();
if($stmt->rowCount()===0){
    $table.='<tr  class="">
                <td colspan="9" class="text-center"><span>aucun résultat trouvé</span></td>
            </tr>';
}else{
    while($result=$stmt->fetch()){
        $id=$result['id'];
        $nom=$result['nom'];
        $prenom=$result['prénom'];
        $Sexe=$result['sexe'];
        $Téléphone=$result['phone'];
        $civilité=$result['civilité'];
        $Date_Naissance=$result['date_naissance'];
        $Poste=$result['poste'];
        $Salaire=$result['salaire'];
       $table.=' <tr>
     <td  class="text-center alert alert-danger">'.$nom.'</td>
    <td class="text-center alert alert-danger">'.$prenom.'</td>
    <td class="text-center">'.$Sexe.'</td>
     <td class="text-center">'.$Téléphone.'</td>
     <td class="text-center">'.$civilité.'</td>
    <td class="text-center">'.$Date_Naissance.'</td>
    <td class="text-center">'.$Poste.'</td>
     <td class="text-center">'.$Salaire.'</td>
     <td class="text-center">
     <input type="submit" onclick="updateTrava('.$id.')" value="Update" class="btn btn-secondary">
    <input type="submit" onclick="deleteTrava('.$id.')" value="Delete" class="btn btn-danger">
    </td>
    </tr>';
    }
}
    $table.='</tbody></table>';
        echo $table;
}
