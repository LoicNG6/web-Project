# WhatHappened

WhatHappened est une plateforme sur laquelle des auteurs peuvent partager leurs articles sur différents sujets (sportifs, politique, social,culturel..) 
Les utilisateurs peuvent également réagir à ces articles en les commentant. Ils peuvent aussi rechercher un article particulier qui les intéresse.
La plateforme permet également d’organiser des événements et de et permettre à des intéressés d'y participer. 

![classes](https://user-images.githubusercontent.com/71633367/112769173-eb3d9680-901f-11eb-9f19-ee18f4c10769.PNG)


## Pour commencer
Pour pouvoir faire tourner le site en local il faut bien appliquer les instructions suivantes

### Prérequis
Les programmes nécessaires pour le fonctionnement du site en local sont:

-Un serveur local de type [WAMP](https://www.wampserver.com/) ou installer le bundle SF5 Web  Server avec la commande
 ```sh
   composer require server --dev
   ```

-Le gestionnaire de dépendances [Composer](https://getcomposer.org/)

### Installation

1. Cloner le repository
   ```sh
   git clone https://github.com/LoicNG6/web-Project.git
   ```
2. Installer les dépendances
   ```sh
   composer install
   ```
## Démarrage
*Si on a installé WampServer:

-Il faut mettre le projet dans le dossier www de wamp et taper l'URL localhost/web-Project/public pour accéder à la page d'accueil

*Si on a installé le bundle Web Server: taper la commande
 ```sh
   php bin/console server:run
   ```

### Tests

Nous avons utilisé l'outil php unit pour écrire nos tests unitaires. Les fichiers de test se trouvent dans le dossier tests.
Pour lancer les tests faut taper la commande
```sh
   php bin/phpunit
   ```
## Construit avec

* [Symfony](http://symfony.com/) - le framework utilisé
* [Composer](https://getcomposer.org/) - le gestionnaire de dépendances
* [Bootstrap](https://getbootstrap.com/) - Utilisé pour le design

## Gestion du projet

Nous avons utilisé l'outil [Monday](https://monday.com/lang/fr/) pour la gestion du projet en agile. Les sprints et la répartition des tâches y sont clairement définis.

![gestion](https://user-images.githubusercontent.com/71633367/112769292-86cf0700-9020-11eb-8220-13918d7f6592.PNG)

## Auteurs

* **Loic NGUESSIE** - *Développeur et Product Owner* 
* **Said KABENE** - *Développeur*
* **Mohamed NDIAYE** - *Développeur* 
