<?php
require_once('./../app.php');
session_start();

if(is_get()){

if(isset($_GET['travailleur'])){
    $table='<table class="table table-striped table-condensed"  >
    <thead class="table-info "  id="table-head" >
   
    <tr class="" style="" id="table_users">
       <th class="text-center" >Nom</th>
        <th class="text-center" >Prénom</th>
        <th class="text-center" >Sexe</th>
        <th class="text-center" >Téléphone</th>
        <th class="text-center">civilité</th>
       <th class="text-center" >Date de Naissance</th>
        <th class="text-center" >Poste</th>
        <th class="text-center" >Adresse</th>
        <th class="text-center" >Salaire</th>
        <th class="text-center" >Operations</th>
     </tr>
  
    </thead>   <tbody>';





$query="SELECT* FROM trava ";
$stmt=$conn->prepare($query);
$stmt->execute();

while($result=$stmt->fetch()){
    $id=$result['id'];
    $nom=$result['nom'];
    $prenom=$result['prénom'];
    $Sexe=$result['sexe'];
    $Téléphone=$result['phone'];
    $civilité=$result['civilité'];
    $Date_Naissance=$result['date_naissance'];
    $Poste=$result['poste'];
    $adress=$result['adresse'];
    $Salaire=$result['salaire'];



   $table.=' <tr>
 <td class="text-center">'.$nom.'</td>
<td class="text-center">'.$prenom.'</td>
<td class="text-center">'.$Sexe.'</td>
 <td class="text-center">'.$Téléphone.'</td>
 <td class="text-center">'.$civilité.'</td>
<td class="text-center">'.$Date_Naissance.'</td>
<td class="text-center">'.$Poste.'</td>
<td class="text-center">'.$adress.'</td>
 <td class="text-center">'.$Salaire.'</td>
 <td class="text-center d-flex ">
 <input type="submit" onclick="updateTrava('.$id.')" value="Update" class="btn btn-sm btn-secondary mx-1">
<input type="submit" onclick="deleteTrava('.$id.')" value="Delete" class="btn btn-sm btn-danger">
</td>

</tr>
';


   



}
$table.='</tbody></table>';
echo $table;
}
}