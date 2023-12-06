<?php
require_once('./../app.php');
session_start();
if(is_post()){
    if(isset($_POST['user'])){
         $table='<table class="table table-striped table-condensed" id="table_users" >
    <thead class="table-info "  id="table-head" >
   
    <tr class="" style="">
       <th class="text-center" >Nom</th>
        <th class="text-center" >Prenom</th>
        <th class="text-center" >Email</th>
        <th class="text-center" >Mot de passe</th>
        <th class="text-center">Operations</th>
     </tr>
  
    </thead>   <tbody>';
        $query="SELECT * FROM users WHERE user_type !='admin'";
        $stmt=$conn->query($query);
        
        while($result=$stmt->fetch()){
            $id=$result['id'];
            $nom=$result['name'];
            $prenom=$result['second_Name'];
            $email=$result['email'];
            $password=$result['password'];
           $table.=' <tr>
         <td class="text-center">'.$nom.'</td>
        <td class="text-center">'.$prenom.'</td>
        <td class="text-center">'.$email.'</td>
         <td class="text-center">'.$password.'</td>
         <td class="text-center">
        <input type="submit" onclick="deleteUser('.$id.')" value="Delete" class="btn btn-sm btn-secondary">
        </td>
        
    </tr>
        ';
        }
        $table.='  </tbody></table>';
        echo $table;

    }

}