<?php
require_once('./../app.php');
session_start();
$title="Display";


if(isset($_POST['displaySend'])){
    $table='<table class="table table-striped" id="table-display" >
    <thead class="table-info " id="table-head" >
   
    <tr class="" style="">
       <th class="text-center" >NUMERO</th>
        <th class="text-center" >TYPE</th>
        <th class="text-center" >LIT</th>
        <th class="text-center" >PRIX</th>
        <th class="text-center">Operations</th>
     </tr>
  
    </thead>   <tbody>';
    $query="SELECT * FROM chambres";
    $stmt=$conn->prepare($query);
     $stmt->execute();
    while($data= $stmt->fetch()){
         $id=$data['id'];
        $numero=$data['numero'];
        $type=$data['type'];
        $lit=$data['lit'];
        $price=$data['prix'].' $';
        $table.='
      
        <tr>
         <td class="text-center">'.$numero.'</td>
        <td class="text-center">'.$type.'</td>
        <td class="text-center">'.$lit.'</td>
         <td class="text-center">'.$price.'</td>
         <td class="text-center">
         <input type="submit" value="Update" onclick="update('.$id.')" class="btn btn-sm btn-primary">
         <input type="submit" onclick="delet('.$id.')" value="Delete" class="btn btn-sm btn-secondary">
        </td>
        
    </tr>
        ';

    } 
    $table.='  </tbody></table>';
    echo "$table";
}