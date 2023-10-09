<?php

$username=$_POST['username'];
$mdp=$_POST['mdp'];

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
die('Could not connect to MySQL: ' . mysqli_connect_error());
}

$sql = "INSERT INTO radcheck (username, value) VALUES (?,?)";
         
if($stmt = mysqli_prepare($conn, $sql)){
    /* Bind les variables à la requette preparée */
    mysqli_stmt_bind_param($stmt,"ss", $username, $mdp);

    /* Set parameters */
  
    /* executer la requette */
    if(mysqli_stmt_execute($stmt)){
        /* opération effectuée, retour */
        header("location: /RadiusPanel/users.php");
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