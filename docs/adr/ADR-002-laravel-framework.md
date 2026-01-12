# ADR-002 : Utilisation de Laravel comme framework d’infrastructure

## Contexte
Le projet nécessite un framework web pour :
- gérer les requêtes HTTP,
- l’injection de dépendances,
- les tests,
- l’organisation du projet.

## Décision
Laravel est utilisé comme framework d’infrastructure uniquement.

Il est cantonné aux couches :
- Infrastructure (controllers, repositories techniques),
- Configuration et injection de dépendances.

Le domaine métier et les cas d’usage ne dépendent pas de Laravel.

## Conséquences
### Positives
- Productivité accrue grâce à l’écosystème Laravel.
- Conteneur d’injection de dépendances robuste.
- Séparation claire entre logique métier et framework.

### Négatives
- Discipline nécessaire pour éviter la fuite de dépendances Laravel
dans le domaine.

## Alternatives considérées
- Symfony : plus verbeux pour un projet de cette taille.
- Framework minimal (Slim) : rejeté pour manque d’outillage intégré.
