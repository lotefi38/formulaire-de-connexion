<?php
try {
    $connexion = new PDO("mysql:host=localhost;dbname=formulaire", "root", "");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $mdp = $_POST['mdp'];

    // Préparation de la requête pour insérer les données
    $req = $connexion->prepare("INSERT INTO formulaire (username, mdp) VALUES (?, ?)");
    
    try {
        $req->execute(array($username, $mdp));
        echo "<p style='color: green;'>Inscription réussie!</p>";
    } catch (Exception $e) {
        echo "<p style='color: red;'>Erreur lors de l'insertion des données : " . $e->getMessage() . "</p>";
    }
}
?>
