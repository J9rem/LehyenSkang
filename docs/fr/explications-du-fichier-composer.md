# Explications sur le contenu du fichier `composer.json`

_[English revision](../en/composer-file-explanations.md)_

Le fichier `composer.json` est localisé à la racine du dossier du projet.

 - Ouvre un objet json
  ```json
  {
  ```
 - Définit le nom du projet pour `composer`
  ```json
      "name": "j9rem/lehyen-skang",
  ```
 - Définit la localisation du fichier `README`
  ```json
      "readme": "README.md",
  ```
 - Donne la licence du projet
  ```json
      "license": "EUPL-1.2",
  ```
 - Donne les détails sur le projet (description, mots clés, page d'accueil)
  ```json
      "description": "Main package of LehyenSkang project for a light CMS based on PicoCMS",
      "keywords": [ "pico", "picocms","lehyenskang"],
      "homepage": "https://github.com/J9rem/LehyenSkang",
  ```
 - Definit la liste des auteurs
  ```json
      "authors": [
        {
          "name": "Jérémy Dufraisse",
          "homepage": "https://github.com/J9rem",
          "role": "Lead developer"
        }
      ],
  ```
 - Donne les liens vers la page de support et de recueil des problèmes
  ```json
      "support": {
        "docs": "https://github.com/J9rem/LehyenSkang/src/branch/master/README.md",
        "issues": "https://github.com/J9rem/LehyenSkang/issues",
        "source": "https://github.com/J9rem/LehyenSkang"
      },
  ```
 - Indique qu'il faut préférer les versions stables pour les dépendances
  ```json
      "prefer-stable": true,
  ```
 - Autorise l'utilisation des versions `dev`
  ```json
      "minimum-stability": "dev",
  ```
 - Ouvre la zone de définition des dépendances
  ```json
      "require": {
  ```
 - Requiert `php` version 7 plus grande que 7.4 (incluses) ou version 8 plus grande que 8.1 (incluse)
  ```json
        "php": "^7.4||^8.1",
  ```
 - Requiert les extensions `php` (requises par exemple pour PicoCMS). Ceci est utile lors de la définition de la configuration ci-dessous.
  ```json
        "ext-dom": "*",
        "ext-filter": "*",
        "ext-json": "*",
        "ext-mbstring": "*",
        "ext-pcre": "*",
  ```
 - Choisit une version spécifique de `parsedown` et crée un faux alias vers les versions requises par `PicoCMS` (car les versions requises par `PicoCMS` ne sont plus bien définies pour être correctement installées avec `composer` sans avertissement)
  ```json
        "erusev/parsedown": "2.0.0-beta-1 as 1.7.4",
        "erusev/parsedown-extra": "2.0.0-beta-1 as 0.8.1",
  ```
 - Requiert l'application principale
  ```json
        "j9rem/lehyen-skang-app": "dev-master",
  ```
 - Requiert `composerInstaller` Pour `Pico` mais l'installe avant `Pico` pour être sûr qu'il est bien activé avant d'importer les plugins `Pico`
  ```json
        "picocms/composer-installer": "dev-pico-3.0",
  ```
 - Requiert le thème par défaut de `Pico` pour un commit spécifique pour éviter les erreurs
  ```json
        "picocms/pico-theme": "dev-pico-3.0#f322a0bbdd115ee1ad14fc50b96a07e79b2a9bd4"
  ```
 - Ferme la zone de définition des dépendances
  ```
      },
  ```
 - Ouvre la zone de configuration
  ```json
      "config": {
  ```
 - Choisir d'optimimser l'autoloader (créer un ficher de cache d'association des classes, ce qui est plus rapide lors de l'exécution mais prend un peu plus de place)
  ```json
        "optimize-autoloader": true,
  ```
 - Choisir uniquement les versions des paquets compatibles avec `php 7.4`
  ```json
        "platform": {
            "php": "7.4"
        },
  ```
 - A l'exécution, vérifier que la version `php` qui s'exécute est la bonne, et si mes bonnes extensions sont installées, sinon, afficher un message d'erreur explicite.
  ```json
        "platform-check": true,
  ```
 - Lors de l'ajout d'un nouveau paquet, trier la liste des paquets.
  ```json
        "sort-packages": true,
  ```
 - Définir les droits pour les plugins
  ```json
        "allow-plugins": {
            "picocms/composer-installer": true,
            "topfloor/composer-cleanup-vcs-dirs": false
        }
  ```
 - Fermer la zone de configuration
  ```
      },
  ```
 - Définir des paramètres supplémentaires utilisés par `composer installer`
  ```json
      "extra": {
        "pico-plugin-dir": "vendor/picocms/plugins/",
        "pico-theme-dir": "vendor/picocms/themes/"
      },
  ```
 - Ouvre la zone de définition de script
  ```json
      "scripts": {
  ```
 - Lancer `ComposerInstaller` après chaque `autoload dump`
  ```json
        "post-autoload-dump": [
            "picocms\\ComposerInstaller\\Installer::postAutoloadDump"
        ],
  ```
 - Définir un script pour créer une archive avec la ligne de commande `composer auto-archive`
  ```json
        "auto-archive": [
            "@composer install --no-dev",
            "@composer archive --format=zip --dir=archives"
        ]
  ```
 - Ferme la zone de défition des scripts
  ```
      },
  ```
 - Définir les paramètres pour l'archivages, en particuliers, les fichiers exclus
  ```json
      "archive": {
        "exclude": ["node_modules","/archives","/*.zip","/*.gz","/*.bz2","vendor/picocms/plugins/*/tests/"]
      },
  ```
 - Donne la alocalisation du dépôt `LehyenSkangApp` car il n'est pas encore enregistré sur `packagist`
  ```json
      "repositories": {
        "j9rem/lehyen-skang-app": {
            "type": "vcs",
            "url": "https://github.com/J9rem/LehyenSkangApp"
        }
      },
  ```
 - Ferme l'objet json
  ```
  }
  ```