# HACKING

## Prérequis

Avoir téléchargé XAMPP (apachefriends.org).

Avoir téléchargé WordPress (fr.wordpress.org).

Disposer du dossier du thème WordPress personnalisé.

## Installation et configuration de XAMPP

XAMPP est uu logiciel permettant de simuler un serveur web (Apache) et une base de données (MySQL) en local.

Installer XAMPP : Lancez l'installateur téléchargé. Lors du choix des composants, cocher Apache, MySQL et phpMyAdmin.
Pour lancer les services :

  - Ouvrez le Panneau de contrôle XAMPP (XAMPP Control Panel)
  - Cliquez sur le bouton **Start** à côté de Apache
  - Cliquez sur le bouton **Start** à côté de MySQL

## Création de la base de données

Allez à l'adresse : http://localhost/phpmyadmin/

- Dans le menu, cliquez sur "Nouvelle base de données"
- Nommez la base de données (ex : wordpress)
- choisir l'interclassement utf8mb4_general_ci, puis cliquez sur Créer

## Installation de WordPress

1. Placer les fichiers :

- Décompressez le fichier .zip de WordPress téléchargé
- Copiez le dossier wordpress extrait
- Collez-le dans le dossier racine du serveur XAMPP : C:\xampp\htdocs\
- S'assurer d'avoir un chemin ressemblant à .../htdocs/wordpress/

2. Lancer l'installation

- Allez à l'adresse : http://localhost/wordpress/ pour accéder à la page de configuration de WordPress
- Remplir les informations de connexion à la base de données :
    - Nom de la base de données : wordpress (ou le nom choisi)
    - Identifiant : root (l'utilisateur par défaut de XAMPP)
    - mot de passe : laisser le champ vide (par défaut sur XAMPP, il n'y a pas de mot de passe)
    - Adresse de la base de données : localhost
- Cliquez sur Valider puis sur Lancer l'installation.
- Renseigner ensuite le titre du site et les identifiants administrateur.

## Installation du thème personnalisé

Maintenant que WordPress est installé, il faut y ajouter le thème développé du bus dentaire gersois. 

- Copiez le dossier contenant le thème personnalisé.
- Naviguez dans les dossiers de XAMPP jusqu'au répertoire des thèmes de l'installation WordPress :
    - Chemin : xampp/htdocs/wordpress/wp-content/themes/
- Collez le dossier du thème à l'intérieur du dossier themes.

## Accéder au site et à l'administration

Pour activer le thème, il faut se connecter à l'interface d'administration de WordPress, aller dans Apparence > Thèmes, trouver le thème et cliquer sur **Activer**.

Pour se connecter : utiliser l'identifiant et le mot de passe administateur créés lors de la configuartion de WordPress.

Pour accéder au site : http://localhost/wordpress/

Pour accéder au tableau de bord : http://localhost/wordpress/wp-admin/
