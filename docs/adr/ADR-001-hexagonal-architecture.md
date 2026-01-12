# ADR-001 : Adoption de l’architecture hexagonale

## Contexte
Le projet consiste à développer une application de gestion de projet
(Kanban, tâches, collaboration).  
Le domaine métier contient des règles susceptibles d’évoluer
(assignation de tâches, statuts, journal d’activité).

Il est nécessaire de garantir :
- une forte testabilité,
- une indépendance vis-à-vis du framework,
- une architecture claire et maintenable.

## Décision
Nous avons choisi une architecture hexagonale (Ports & Adapters).

Le domaine métier est placé au centre de l’application.
Les interactions avec l’extérieur (HTTP, base de données, framework Laravel)
sont réalisées via des adapters.

## Conséquences
### Positives
- Le domaine métier est indépendant de toute technologie.
- Les règles métier sont testables unitairement.
- Le framework peut être remplacé sans impact majeur.

### Négatives
- Complexité initiale plus élevée qu’une architecture MVC classique.
- Nécessite une bonne discipline de structuration du code.

## Alternatives considérées
- Architecture MVC Laravel classique : rejetée car trop couplée au framework.
- Microservices : rejetés car surdimensionnés pour le périmètre du projet.
