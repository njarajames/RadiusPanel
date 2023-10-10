<?php

$ip_nas=$_POST['ip_nas'];
$descr_nas=$_POST['descr_nas'];
$key_nas=$_POST['mdp_nas'];

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
die('Could not connect to MySQL: ' . mysqli_connect_error());
}

$sql = "INSERT INTO nas (nasname, shortname, secret) VALUES (?,?,?)";
         
if($stmt = mysqli_prepare($conn, $sql)){
    /* Bind les variables à la requette preparée */
    mysqli_stmt_bind_param($stmt,"sss", $ip_nas, $descr_nas,$key_nas);

    /* Set parameters */
  
    /* executer la requette */
    if(mysqli_stmt_execute($stmt)){
        header("location: /RadiusPanel/nas.php");
        echo '<script>alert("ajout Adresse de Mac avec succès ")</script>';
        exit();
    } else{
        echo "Oops! une erreur est survenue.";
    }
}
 
/* Close statement */
mysqli_stmt_close($stmt);


/* Close connection */
mysqli_close($conn);


?>