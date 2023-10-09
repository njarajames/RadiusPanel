<?php

$db = new PDO("mysql:host=localhost;dbname=test", "root", "");



    $query ="SELECT id,username,value FROM radcheck WHERE id = :id";

    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id_user);
   
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$outputOctets = [];
$inputOctets = [];
$timestamps = [];

foreach ($result as $row) {
    $id[] = $row["id"];
    $username[] = $row["username"];
    $value[] = $row["value"];
    
}

?>
