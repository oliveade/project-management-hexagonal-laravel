# Project Management – Hexagonal Architecture (Laravel)

# Contexte
Ce projet est une application de gestion de projet (type Kanban)

L’objectif principal n’est pas la complétude fonctionnelle, mais la
**conception d’une architecture logicielle claire, testable et évolutive**.


# Objectifs pédagogiques
- Appliquer une architecture hexagonale (Ports & Adapters)
- Séparer clairement domaine, application et infrastructure
- Mettre en œuvre les principes SOLID
- Documenter les décisions d’architecture (ADR)
- Fournir des tests unitaires ciblés


### Architecture hexagonale
Le projet adopte une architecture hexagonale :
- **Domaine** : logique métier pure, indépendante du framework
- **Application** : cas d’usage (use cases) et orchestration
- **Infrastructure** : Laravel, HTTP, persistance, injection de dépendances

📐 Diagramme UML :
