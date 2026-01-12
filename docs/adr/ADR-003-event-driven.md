# ADR-003 : Utilisation d’événements métier internes

# Contexte
L’application doit gérer un journal d’activité :
- création de projet,
- ajout de tâche,
- changements d’état.

Ces fonctionnalités doivent être découplées du cœur métier.

# Décision
Un modèle event-driven interne est adopté.

Les entités métier émettent des événements de domaine
(ex: TaskCreated, TaskCompleted).
Ces événements peuvent être consommés par des listeners
pour la journalisation ou les notifications.

# Conséquences
# Positives
- Découplage entre logique métier et effets secondaires.
- Extensibilité (notifications, audit, temps réel).
- Alignement avec une architecture évolutive.

# Négatives
- Complexité légèrement accrue.
- Gestion de la cohérence éventuelle à anticiper.

# Alternatives considérées
- Appels directs depuis les use cases : rejetés car trop couplés.
