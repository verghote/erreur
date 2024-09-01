# Gestion standard pour l'affichage des erreurs  

Tous les projets Web doivent prévoir d'afficher des interfaces personnalisées pour afficher les erreurs classiques (401, 403, 404)
ainsi que les erreurs spécifiques à l'application.

Ce référentiel contient l'ensemble des scripts PHP permettant cette gestion. 

* 401.php
> Affiche une interface personnalisée si une erreur 401 est renvoyée par le serveur (authentification demandée)  
>
* 403.php
> Affiche une interface personnalisée si une erreur 403 est renvoyée par le serveur (accès interdit)
* 404.php
> Affiche une interface personnalisée si une erreur 404 est renvoyée par le serveur (page non trouvée)

Pour activer l'utilisation des fichiers 401.php, 403.php et 404.php, il suffit d'ajouter le code suivant dans le fichier .htaccess du projet :

```apache
  ErrorDocument 404 /erreur/404.php
  ErrorDocument 403 /erreur/403.php
  ErrorDocument 401 /erreur/401.php
```

Pour intégrer ce répertoire dans votre projet :

```bash
  git submodule add https://github.com/verghote/erreur.git erreur
```
