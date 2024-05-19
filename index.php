<?php
try {
    $connexion = new PDO("mysql:host=localhost;dbname=formulaire", "root", "");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <form action="login.php" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" required> <br>
            
            <label for="mdp">Mot de passe</label> <!-- Correction du nom du champ -->
            <input type="mdp" id="mdp" name="mdp" required> <br> <!-- Correction du type et du nom du champ -->
            
            <button type="submit" name="bouton">Se connecter</button>
        </form>
    </div>
</body>
</html>
