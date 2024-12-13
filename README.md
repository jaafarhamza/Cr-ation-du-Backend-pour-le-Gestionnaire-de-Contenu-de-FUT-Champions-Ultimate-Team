# Cr-ation-du-Backend-pour-le-Gestionnaire-de-Contenu-de-FUT-Champions-Ultimate-Team

## Contexte du Projet

Le projet consiste à développer la partie backend de la plateforme FUT Champions Ultimate Team en utilisant PHP procédural et MySQLi. L'objectif principal est de créer un gestionnaire de contenu robuste qui permet de gérer les entités liées au jeu, telles que les joueurs, les équipes, et les nationalités. De plus, une fonctionnalité d'internationalisation sera intégrée pour permettre l'utilisation multilingue de la plateforme.

## Fonctionnalités Backend Attendues

### Analyse et Optimisation des Données

Analyse du JSON : Une analyse approfondie du fichier JSON fourni pour concevoir une structure de base de données optimale.

Schémas relationnels : Conception de schémas efficaces pour gérer les relations entre les entités comme les joueurs, équipes, et nationalités.

### Gestion des Entités

CRUD : Implémentation d'opérations CRUD (Create, Read, Update, Delete) pour les entités suivantes :

Joueurs

Équipes

Nationalités

Relations : Gestion des relations complexes entre les entités, comme associer un joueur à une équipe et une nationalité.

### Tableau de Bord et Statistiques

Statistiques clés : Visualisation dynamique des statistiques importantes, comme :

Nombre total de joueurs.

Répartition des joueurs par nationalité.

## Prérequis

Pour exécuter ce projet, assurez-vous d'avoir les éléments suivants :

Serveur Apache avec PHP (version 7.4 ou supérieure).

Base de données MySQL.

dashboard.php 

## Installation

### Cloner le dépôt :

git clone <url_du_dépôt>

### Configurer la base de données :

Importez le fichier SQL contenant les schémas de base de données dans votre serveur MySQL.

### Charger les données initiales :

Utilisez le script fourni pour parser le fichier JSON et insérer les données dans la base de données.


Notes

Si vous rencontrez des problèmes, veuillez consulter la documentation ou ouvrir une issue dans le dépôt GitHub.

