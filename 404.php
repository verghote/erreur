<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>Erreur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    // chargement du composant bootstrap
    echo file_get_contents('https://cdn.jsdelivr.net/gh/verghote/composant/bootstrap.html');
    ?>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container-fluid d-flex flex-column p-0 h-100">
    <main>
        <div class="formulaire text-center mt-3" style="width: 32rem;">
            <p class="erreur">
                La page demandée n'existe pas.
            </p>
            <hr>
            <a href="/" class="mx-3" style="text-decoration: underline; color : #5cb85c">
                Revenir à la page d'accueil
            </a>
        </div>
    </main>
</div>
</body>
</html>
