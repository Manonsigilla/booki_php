# booki_php

## Première phase : Module de connexion

### Description : 
Créez un module de connexion simple qui permet aux utilisateurs de se 
connecter avec un nom d'utilisateur et un mot de passe. Si les informations sont correctes, 
l'utilisateur est redirigé vers une page de bienvenue. Sinon, un message d'erreur est affiché.
Sur la page bienvenue, il faut ajouter un bouton de déconnexion.
### Pages du projet : 
* index.php : Page de connexion où les utilisateurs saisissent leurs informations.
* bienvenue.php : Page de bienvenue affichée après une connexion réussie. Si l’utilisateur 
n’est pas connecter, il ne doit pas avoir accès à cette page. 
* styles.css : Fichier CSS pour la mise en forme.
### Objectifs : 
* Créer un formulaire de connexion avec des champs pour le nom d'utilisateur et le 
mot de passe.
* Valider les informations soumises par l'utilisateur.
* Utiliser un tableau associatif pour stocker les informations de connexion (simulées 
ici).
* Rediriger l'utilisateur vers la page de bienvenue en cas de succès.
* La connexion doit être stocké dans une session ou un cookie
* La page bienvenue n’est pas accessible si l’utilisateur n’est pas connecté.
* Afficher un message d'erreur en cas d'échec.

## Deuxième phase : Refactoriser Booki

Dans ce projet, la base vous est fournie, à savoir : 
- La page d’accueil
- La page de détail pour les hébergements
- La page de détail pour les populaires
- La page de détail pour les activités
Le style est déjà créé et n’est donc pas à refaire. 
Votre mission est de faire en sorte de : 
* Créer un header a afficher sur les différentes pages
* Créer un footer à afficher sur les différentes pages
* Créer un tableau pour les hébergements à Marseille
* Créer un tableau pour les activités a Marseille
* Créer un tableau pour les plus populaires

En utilisant PHP, vous devrez appeler le header et le footer sur les différentes pages. Vous 
utiliserez PHP pour appeler les activités, les hébergements et les plus populaires sur la page 
d’accueil.
Avec PHP, vous allez appeler les différentes informations sur les pages de détails de chacune 
des vignettes. Attention, vous ne devez pas dupliquer les pages de détails pour chaque 
vignette.
