<?php
require_once('./../app.php');
session_start();
if(is_get()){
    $table='
    <table class="table table-hover" id="table_users" >
        <thead class="table-info "  id="table-head" >
        <tr class="" style="">
        <th class="text-center" >Nom</th>
            <th class="text-center" >Prenom</th>
            <th class="text-center" >Email</th>
            <th class="text-center" >Mot de passe</th>
            <th class="text-center">Operations</th>
        </tr>
        </thead> 
      <tbody>';
    $keyword=$_GET['keyword'];
    $query="SELECT * FROM users WHERE email REGEXP :keyword AND user_type !='admin' ";
    $stmt=$conn->prepare($query);
    $stmt->bindValue(":keyword","^$keyword");
    $stmt->execute();
    if($stmt->rowCount()===0){
         
         echo $table.='<tr  >
        <td colspan="5"  class="text-center">Aucun résultat</td>  </tr>
          </tbody>
        </table>
         ';
    }else{
          $result=$stmt->fetchAll();

        foreach($result as $user){
                $id=$user['id'];
                $nom=$user['name'];
                $prenom=$user['second_Name'];
                $email=$user['email'];
                $password=$user['password'];
            $table.=' <tr class="">
            <td class="text-center">'.$nom.'</td>
            <td class="text-center">'.$prenom.'</td>
            <td class="text-center table-danger">'.$email.'</td>
            <td class="text-center">'.$password.'</td>
            <td class="text-center">
            <input type="submit" onclick="deleteUser('.$id.')" value="Delete" class="btn btn-secondary">
            </td>
            
        </tr>
            ';
            }
        $table.=' 
         </tbody>
        </table>';
        echo $table;
    }
  
       


}