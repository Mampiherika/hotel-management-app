<?php
require_once('./../app.php');
session_start();
$title="Client";
ensure_is_user_authenticated_user();
$user_type = $_GET['user_type'];

view('users/index',$user_type);