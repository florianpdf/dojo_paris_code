# 2017-checkpoint-1
Wild Code School Checkpoint 1 - Vendredi 17 mars
JS / PHP - 4h

## Correction

Config nécéssaire:

### 1. Créer un fichier *parameters.php* à la racine du projet avec les informations de votre base de données:
```php
<?php

$id_bdd =  'identifiant bdd';
$mdp_bdd =  'mdp base de donnée';
$name_bdd = 'nom de la base de donnée';
```
Respecter le nom des variables !!!

### 2. La base de données doit contenir:
 - Une table nommé *citation*
 - Catte table doit contenir:
  - Champ *id* primary key auto-increment
  - Champ *author* type text
  - Champ *chapter* type text
  - Champ *content* type longtext
  - Champ *date* type date
  - Champ *image* type longtext
