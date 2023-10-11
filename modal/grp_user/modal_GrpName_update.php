<?php

$hostname=$_POST['hostname'];
$macaddr=$_POST['macaddr'];
$id=$_POST['id'];

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';


echo $username;
echo $id;
echo $mdp;


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
die('Could not connect to MySQL: ' . mysqli_connect_error());
}


$sql = "UPDATE radmacauth SET hostname=?, macaddr=? WHERE id=?";

$stmt = mysqli_prepare($conn, $sql);
         
if($stmt = mysqli_prepare($conn, $sql)){
    
    mysqli_stmt_bind_param($stmt, "ssi", $hostname, $macaddr, $id);
  
    if(mysqli_stmt_execute($stmt)){
        /* enregistremnt modifié, retourne */
        header("location: /RadiusPanel/users.php");
        exit();
    } else{
        echo "Oops! une erreur est survenue.";
    }
}
 

mysqli_stmt_close($stmt);



mysqli_close($conn);


?>