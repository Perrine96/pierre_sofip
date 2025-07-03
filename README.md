# 📋 Présentation du projet
Ce projet est une application web qui permet la gestion des stagiaires d’un centre de formation via une interface de type CRUD (Create, Read, Update, Delete). Elle permet :
- de consulter la liste des stagiaires
- d’ajouter un stagiaire via un formulaire
- de modifier et/ou de supprimer un stagiaire

Le projet utilise PHP pour la logique serveur, Bootstrap pour le style, et MySQL comme base de données.

## Installation
1. Cloner le projet :
```bash
git clone <lien-du-dépôt>
```
2. Placer les fichiers dans le dossier racine de votre serveur web local (ex. : htdocs/ pour XAMPP ou MAMP).
3. Configurer la base de données dans votre SGBD (phpMyAdmin, MySQL CLI, etc.)

## Structure de la base de données
Voici le code SQL à exécuter pour créer la base de données et la table nécessaire :

```sql
CREATE DATABASE IF NOT EXISTS pierre_sofip;

USE pierre_sofip;

CREATE TABLE IF NOT EXISTS stagiaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(20) NOT NULL,
    prenom VARCHAR(20) NOT NULL,
    age INT NOT NULL,
    date_de_naissance DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    ville VARCHAR(20) NOT NULL
);
```

## Configuration
Dans le fichier ```config/connexion_db.php```, vous pouvez définir vos paramètres de connexion à la base de données.