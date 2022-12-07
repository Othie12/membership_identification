<?php

$server = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$server;dbname=pmi", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected successfully";

} catch(PDOExeption $e) {
    $conn->rollback();
    echo "<p>connection failed: ".$e->getMessage()."</p><br>";
    
    }