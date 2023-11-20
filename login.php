<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/boostrap/css/bootstrap.css">   
    <link rel="stylesheet" href="./dist/boostrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./dist/custom/css/login.css">
</head>
<body>
       
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">RadPan</h2>
                <p class="text-white-50 mb-5">Connexion</p>

                <form method="POST" action="login.php">
                    <div class="input-group mb-4">
                        
                        <input type="text" class="form-control" id="username" name="username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Veuillez entrer votre nom d'utilisateur ici">
                    </div>
                    
                    <div class="input-group mb-4">
                
                        <input type="password" class="form-control" id="password" name="password" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Veuillez entrer votre mot de passe ici">
                    </div>


                    <button class="btn btn-outline-primary btn-lg px-5" type="submit">Se connecter</button>

        
                </form>

            </div>
            </div>
        </div>
    </div>
    </section>
</body>
<script lang="js" src="./dist/boostrap/js/bootstrap.bundle.js"></script>
<script lang="js" src="./dist/boostrap/js/bootstrap.js"></script> 
<script lang="js" src="./dist/font-awesome/js/all.min.js"></script>   
</html>

<?php 

require_once "config.php";

$username = "";
$password = ""; 

    // Requête préparée pour vérifier les informations d'identification

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    if($stmt = mysqli_prepare($conn, $sql)) {
        /* Lier les variables à la requête préparée */
        mysqli_stmt_bind_param($stmt, "ss", $_POST['username'], $_POST['password']);
        /* Exécuter la requête */
        if(mysqli_stmt_execute($stmt)) {
            /* Obtenir le résultat */
            $result = mysqli_stmt_get_result($stmt);
            
            /* Compter le nombre de lignes retournées par la requête */
            if(mysqli_num_rows($result) > 0) {
                /* Redirection si des lignes sont retournées (authentification réussie) */
                session_start();
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $_POST['username'];
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Identifiants invalides.";
            }
        } else {
            echo "Oops! Une erreur est survenue.";
        }
        /* Fermer la requête préparée */
        mysqli_stmt_close($stmt);
    }
    }
?>




