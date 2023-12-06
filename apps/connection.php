<?php
try {
    $conn=new PDO("mysql:host=localhost;dbname=hotel",'root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
   
} catch (Exception $e) {
    die("Error: ".$e->getMessage());
}