<?php
require_once('./../app.php');
session_start();
if(isset($_GET['user_typ'])){
    $type_user=$_GET['user_type'];
    echo $type_user;
}