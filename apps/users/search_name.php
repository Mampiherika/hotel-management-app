<?php
require_once('./../app.php');
$title="";
session_start();
if(is_get()){
   $nom= $_GET["name_search"];

   $table='
   <table class="table table-striped table-sm " >
<thead class="thead table-info">
<tr class="table_history form-text">
 <th class=" text-center" style="cursor:move;"><span>NOM</span></th>
 <th class="text-center" style="cursor:move;"><span>PRENOM</span></th>
 <th class="text-center" style="cursor:move;" ><span>TELEPHONE</span></th>
 <th class="text-center" style="cursor:move;" ><span>PAYS</span></th>
 <th class="text-center" style="cursor:move;"><span>N°CHAMBRE</span></th>
 <th class="text-center " style="cursor:move;"><span>ENTREE</span></th>
 <th class="text-center " style="cursor:move;"><span> SORTIE</span> </th>
 <th class=" text-center" style="cursor:move;" ><span> JOUR</span></th>
 <th class="text-center" style="cursor:move;"><span>Nb JOUR</span></th>
 <th class="text-center" style="cursor:move;"><span>TOTAL</span></th>
 <th class="text-center" style="cursor:move;"><span>ADRESSE</span></th>
 <th class="text-center" style="cursor:move;"><span>DATE DE PAYEMENT</span></th>
</tr>
</thead>
<tbody class="body_result"> ';



$query="SELECT * FROM caisse WHERE nom REGEXP :nom_client ";
$stmt=$conn->prepare($query);
$stmt->bindValue(":nom_client","^$nom");
$stmt->execute();
if($stmt->rowCount()===0){
    $table.='<tr  class="">
                <td colspan="13" class="text-center"><span>aucun résultat trouvé</span></td>
            </tr>';

}else{
    while($history=$stmt->fetch()){
        $table.='
        <tr class="text-center ">
  <td class=" alert alert-danger"><span>'.$history['nom'].'</span></td>
  <td  class=" alert alert-danger"><span>'.$history['prenom'].'</span></td>
  <td><span>'.$history['phone'].'</span></td>
  <td><span>'.$history['pays'].' </span></td>
  <td><span class="text-center">'.$history['num_chambre'].'</span></td>
  <td ><span >'.$history['date_entre'].'</span></td>
   <td><span>'.$history['date_sortie'].'</span></td>
  <td><span>'.$history['prix_journalier'].' $</span></td>
  <td><span>'.$history['nombre_jour'].'</span></td>
  <td><span>'.$history['total_payer'].' $ </span></td>
  <td><span>'.$history['adresse'].'</span></td>
  <td><span>'.$history['date_payement'].'</span></td>
 
</tr>
  ';
    }

}

     $table.=' </tbody>
</table>';

    echo $table;
}
