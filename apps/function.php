<?php

function view($name,$model=""){
    global $title,$message;
    require_once(APP_PATH. "views/layout.view.php");
}
function redirect($url){
    header("Location:$url");
}
function is_user_authenticated_admin(){
    if(isset($_SESSION['email'])) {
       $user= $_SESSION['user_type'];
       if($user ==='admin'){
        return true;
       }
       else{
        return false;
       }
    } 
    else{
        return false;
       }
}
function ensure_is_user_authenticated_admin(){
    if(!is_user_authenticated_admin()){
        redirect('./../login');
        
    }
}
function is_user_authenticated_user(){
    if(isset($_SESSION['email'])) {
       $user= $_SESSION['user_type'];
        if($user ==='user'){
            return true;
        }
        else{
            return false;
        }
    } else{
        return false;
       }
}
function ensure_is_user_authenticated_user(){
    if(!is_user_authenticated_user()){
        redirect('./../login.php');
        
    }
}
function is_post(){
    return $_SERVER['REQUEST_METHOD']==='POST';
}
function is_get(){
    return $_SERVER['REQUEST_METHOD']==='GET';
}
function sanitize($value){
    if(!filter_var(trim($value),FILTER_SANITIZE_STRING)){
        return false;
    }
}