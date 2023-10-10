<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
die('Could not connect to MySQL: ' . mysqli_connect_error());
}

$id= urldecode(base64_decode($_GET['id_nas']));

$sql = "DELETE FROM nas WHERE id = ?";

if($stmt = mysqli_prepare($conn, $sql)){
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    if(mysqli_stmt_execute($stmt)){
       
        header("Refresh: 0;url=/RadiusPanel/nas.php");
        exit();
    } else{
        echo "Oops! une erreur est survenue.";
    }
    mysqli_stmt_close($stmt);

    mysqli_close($link);
}
 

?>