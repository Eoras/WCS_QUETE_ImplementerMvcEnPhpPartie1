# IMPLÉMENTER MVC EN PHP - PARTIE 1
- **QUÊTE** - MVC en PHP - *Implémentation*
- *171029_ImplementerMvcEnPhpPartie1_Quete*
----
**Première partie : le modèle**

- Tu vas créer au fil de ces quêtes un petit site web qui va te permettre de gérer les quêtes que tu as terminé, avec une note sur la qualité de la quête.
- En phase préparatoire, tu vas créer une base de données que tu vas nommer quest_manager, et une table que tu vas nommer quest.
- Dans la table quest, tu vas intégrer les champs suivants: * id : integer * name : varchar(100) * course : varchar(100) * score : integer
- Pour pouvoir tester ton code, tu vas devoir créer quelques lignes de données manuellement directement dans la table.
- Enfin, crée la structure de dossiers suivante :
    - project
        - src
            - model
            - view
            - controller
        - public

Créée les fichiers suivants :
- Dans le dossier public: * index.php
- Dans le dossier model: * Pdo.php, une classe permettant de créer une connexion à mysql et de requêter une table * Quest.php, la classe permettant de gérer les données de la table Quest (appelée entité) * QuestManager.php, la classe permettant de persister les données de l'entité dans la base de données
- Pdo.php devra contenir les mécanismes de connexion et de requêtage.
- Quest.php contiendra une classe avec des attribus associés aux champs de la table, ainsi que les méthodes (getters et setters) permettant d'accéder et de modifier leurs valeurs.
- QuestManager.php contiendra pour l'instant une méthode permettant de lire les données et d'hydrater l'entité. Hydrater est un terme un peu barbare qui signifie tout simplement que l'on fourni à l'entité les données grâce aux setters.

**Critéres de validation**
- ton code est disponible sur ton compte github.
- l'appel du fichier index.php dans un navigateur affiche le contenu de la table
- index.php fait appel à la classe QuestManager.php pour récupérer les données dans un tableau d'objets de type Quest
- QuestManager.php fait appel à Pdo.php pour communiquer avec MySQL

> [WildCodeSchool](https://wildcodeschool.fr/)