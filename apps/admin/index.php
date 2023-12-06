<?php
require_once('./../app.php');
session_start();
$title="Admin";
ensure_is_user_authenticated_admin();
$user_type = $_GET['user_type'];


view('admin/index',$user_type);