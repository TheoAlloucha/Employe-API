# Présentation

Ce projet est une application simple qui utilise Symfony et API Platform pour créer une API RESTful permettant de gérer les employés d'une entreprise.

## Fonctionnalités

L'API permet de :

- Récupérer tous les employés de l'entreprise (paginés par 10).
- Récupérer un employé en fonction de son identifiant.
- Ajouter un nouvel employé (nécessite le rôle ROLE_ADMIN).
- Modifier un employé (nécessite le rôle ROLE_ADMIN).
- Supprimer un employé (nécessite le rôle ROLE_ADMIN).

## Entités

**Employé:**
- Identifiant (auto-incrémenté)
- Prénom (obligatoire)
- Nom (obligatoire)
- Username (unique)
- Mot de passe (obligatoire)
- Tableau de rôles (vide par défaut, ROLE_ADMIN pour les administrateurs)

## Fixtures

- 100 employés avec des données aléatoires (Faker) et le rôle ROLE_USER.
- 1 employé administrateur avec l'identifiant admin et le mot de passe admin.

## Méthodes

- GET /api/users : Récupère tous les employés (paginés).
- GET /api/users/{id} : Récupère un employé en fonction de son identifiant.
- POST /api/users : Ajoute un nouvel employé (nécessite ROLE_ADMIN).
- PUT /api/users/{id} : Modifie un employé (nécessite ROLE_ADMIN).
- DELETE /api/users/{id} : Supprime un employé (nécessite ROLE_ADMIN).

- DELETE /auth/ : Crée un jeton JWT (nécessite ROLE_USER).

## Droits d'accès

- ROLE_USER: Consulter la liste des employés et un employé en fonction de son identifiant.
- ROLE_ADMIN: Accéder à toutes les fonctionnalités de l'API (création, modification, suppression).

## Technologies utilisées

- Symfony: Framework PHP pour le développement d'applications web
- API Platform: Plateforme pour créer des API RESTful avec Symfony
