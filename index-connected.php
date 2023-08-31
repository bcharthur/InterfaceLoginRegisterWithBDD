<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:login-index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html lang="fr">
      
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>M4 - Interface d'authentification</title> 
       <link type="text/css" rel="stylesheet" href="css/style-index.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
</head>
<body>
       <!-- Barre de navigation-->
    <nav>
       <div class="onglets">
           <p onclick="window.location.href='index-connected.php';">Accueil</p>
           <p onclick="window.location.href='login-landing.php';"><i class="fa-solid fa-user"></i> - <?php echo $data['pseudo']; ?></p>
       </div>
   </nav>
<!-- Fin de Barre de navigation-->
 <header>
    <h1>Vous êtes bien connectés</h1>
 </header>
 <br>
</br>
</br>
</body>
</html>

<!-- CORRECTION VALIDE -->