<?php
// Inclure la fonction qui gère l'affichage du header
include('src/Utilitaire/afficherHeader.php');

// Appeler la fonction pour afficher le header
afficherHeader();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="Pages/css/style.css">
</head>

<body>
    <!-- Creation d'un formulaire de connexion envoyant via POST les donnees a la page "page"-->
    <form action=./Pages/page.php method="post">

            <div id="champ">
                <!-- Champ pseudonyme Obligatoire -->
                <input type="text" id="user_pseudo" name="pseudo" required="required"/>
                <label for="user_pseudo"> Pseudo * </label>
            </div>

            <div id="champ">
                <!-- Champ Mot de passe Obligatoire -->
                <input type="password" id="user_password" name="password"required="required" />
                <label for="user_password"> Mot de Passe * </label>
            </div>


        <!-- Bouton d'envoie transmettant les donnees + affichant la page "page"-->
        <div class="button">
            <button type="submit">Se Connecter</button>
        </div>
    </form>

</body>
</html>