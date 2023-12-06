<?php
require_once('app.php');
$title="Login";
$message='';
session_start();

if($_SERVER['REQUEST_METHOD']==='POST'){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        
        $message="Enter a valid email";
    }else{
       $sql= "SELECT * FROM users WHERE email=:email";
       $stmt=$conn->prepare($sql);
        $stmt->bindParam(":email",$email);
         $stmt->execute();
        if($stmt->rowCount()===0){
             $message='<div class="alert alert-danger">This account doesn\'t exist</div>';
        }else{
            while($result=$stmt->fetch()){
                $passwordlog=$result['password'];
                if($password===$passwordlog){
                    if($result['user_type']==='admin'){
                     $id=$result['id'];
                     $_SESSION['name']=$result['name'];
                     $_SESSION['email']=$result['email'];
                     $_SESSION['user_type']=$result['user_type'];
                     $user_type=$result['user_type'];
                    redirect("admin/index?id=$id&user_type=$user_type");
                    die();
                    }else{
                        $id=$result['id'];
                        $user_type=$result['user_type'];
                     $_SESSION['name']=$result['name'];
                     $_SESSION['email']=$result['email'];
                      $_SESSION['user_type']=$result['user_type'];
                    redirect("users/index?id=$id&user_type=$user_type");
                    die();
                    }

                }else{
                    $message='<div class="alert alert-danger">Password incorrect</div>';
                }
            }

        }

        
    }
 
}


view('login');

