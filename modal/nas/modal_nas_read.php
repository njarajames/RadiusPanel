<?php

$db_nas = new PDO("mysql:host=localhost;dbname=test", "root", "");



    $query_nas_update ="SELECT id,nasname,shortname,secret FROM nas WHERE id = :id";

    $stmt_nas_update = $db_nas->prepare($query_nas_update);
    $stmt_nas_update->bindParam(":id", $id_nas);
   
    $stmt_nas_update->execute();

    $result_update_nas = $stmt_nas_update->fetchAll(PDO::FETCH_ASSOC);


foreach ($result_update_nas as $row_nas) {
    $result_update_nas["id"] = $row_nas["id"];
    $result_update_nas["nasname"] = $row_nas["nasname"];
    $result_update_nas["shortname"] = $row_nas["shortname"];
    $result_update_nas["secret"] = $row_nas["secret"];
    
}

?>