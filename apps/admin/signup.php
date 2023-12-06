<?php
require_once('./../app.php');
$title="sign up";

if(is_post()){
    $name=$_POST["user_nom"];
    $second_name=$_POST["user_prenom"];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPwd=$_POST['confirmPwd'];
    $message;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        die("Enter a validate email");
    }
    if($password !== $confirmPwd){
        die('Confirm your password') ;
        
    }else{
        $sql="SELECT*FROM users WHERE name=:name AND second_Name=:second_Name";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":second_Name",$second_name);
         $stmt->execute();

         if($stmt->rowCount()>0){
            die('username already exist') ;
         }else{
            $sql="INSERT INTO users(name,second_Name,email,password) VALUES(:name,:second_Name,:email,:password)";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(":name",$name);
            $stmt->bindParam(":second_Name",$second_name);
            $stmt->bindParam(":email",$email);
            $stmt->bindParam(":password",$password);
            $stmt->execute();
         }


       
    }
   
}

