<?php

$nasname=$_POST['nasname'];
$shortname=$_POST['shortname'];
$key=$_POST['secret'];
$id=$_POST['id'];

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
die('Could not connect to MySQL: ' . mysqli_connect_error());
}


$sql = "UPDATE nas SET nasname=?, shortname=? , secret=? WHERE id=?";

$stmt = mysqli_prepare($conn, $sql);
         
if($stmt = mysqli_prepare($conn, $sql)){
    
    mysqli_stmt_bind_param($stmt, "sssi", $nasname, $shortname, $key,$id);
  
    if(mysqli_stmt_execute($stmt)){
        /* enregistremnt modifié, retourne */
        //header("location: /RadiusPanel/nas.php");
        echo "<script>alert('Enregistrement modifié');</script>";
        echo "<script>window.location.href='/RadiusPanel/nas.php';</script>";
       

        exit();
    } else{
        echo "Oops! une erreur est survenue.";
    }
}
 

mysqli_stmt_close($stmt);



mysqli_close($conn);


?>