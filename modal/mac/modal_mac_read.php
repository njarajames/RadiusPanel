<?php

$db_mac = new PDO("mysql:host=localhost;dbname=test", "root", "");



    $query_mac_update ="SELECT id,hostname,macaddr FROM radmacauth WHERE id = :id";

    $stmt_mac_update = $db_mac->prepare($query_mac_update);
    $stmt_mac_update->bindParam(":id", $id_mac);
   
    $stmt_mac_update->execute();

    $result_update_mac = $stmt_mac_update->fetchAll(PDO::FETCH_ASSOC);
$outputOctets = [];
$inputOctets = [];
$timestamps = [];

foreach ($result_update_mac as $row_mac) {
    $result_update_mac["id"] = $row_mac["id"];
    $result_update_mac["hostname"] = $row_mac["hostname"];
    $result_update_mac["hostname"] = $row_mac["macaddr"];
    
}

?>