<?php
require_once "../src/Utilitaire/Singleton_ConnexionPDO.php";
include('../src/Utilitaire/afficherHeader.php');

afficherHeader();


// Recuperation des valeur renvoyer par le formulaire avec POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
}

try {
    // Connexion PDO permettant le lien avec la base
    $pdo = Singleton_ConnexionPDO::getInstance();

    // Requete parametrees contre les injection SQL
    $stmt = $pdo->prepare("SELECT name, age, password FROM utilisateur WHERE pseudo = :pseudo AND password = :password");
    // Requete SQL permettant de recuperer le nom et l'age de l'utilisateur demande.

    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':password', $password); // Ici non hache ! donc non securise

    $stmt->execute();

    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur) {

        $nbCaracteres = strlen($utilisateur['password']); // ->  Retourne la longueur du mdp
        $mdpCache = str_repeat('*', $nbCaracteres); // -> Retourne '*' repetee nbCaracteres fois dans une chaine de caractere.

        echo "Bonjour " . htmlspecialchars($utilisateur['name']) . ", vous avez " . htmlspecialchars($utilisateur['age']) . " ans.";
        echo '<br>';
        echo "Votre mot de passe est: " . $mdpCache;

    } else {
        echo "Pseudo ou mot de passe incorrect.";
    }

} catch (Exception $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

