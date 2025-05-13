<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Creation d'un formulaire de connexion envoyant via POST les donnees a la page "page"-->
    <form action=./Pages/page.php method="post">
        <ul>
            <li>
                <label for="user_pseudo"> Pseudo </label>
                <input type="text" id="user_pseudo" name="pseudo" />
            </li>
            <li>
                <label for="user_password"> Mot de Passe </label>
                <input type="password" id="user_password" name="password" />
            </li>
        </ul>

        <!-- Bouton d'envoie transmettant les donnees + affichant la page "page"-->
        <div class="button">
            <button type="submit">Se Connecter</button>
        </div>
    </form>

</body>
</html>