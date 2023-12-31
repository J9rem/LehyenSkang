# Documentation d'installation de `LehyenSkang` pour les développeurs

_[English revision](../en/install.md)_

## Pré-requis

 - un serveur [PHP](https://php.net) avec la version `7.4` ou supérieur
 - a serveur web
 - [`composer`](https://getcomposer.org)
 - [`git`](https://git-scm.com)

## Méthode

 - cloner le dépôt
   ```bash
   git clone https://github.com/J9rem/LehyenSkang.git my-repo
   cd my-repo
   ```
 - ou créer un nouveau dossier lié à ce projet
   ```bash
   mkdir my-repo
   cd my-repo
   git init
   git remote add origin https://github.com/J9rem/LehyenSkang.git
   git fetch
   git checkout master
   ```
 - puis installer les dépendances avec `composer`
   ```bash
   composer install
   ```
 - configurer le serveur web pour afficher le fichier `index.php` et ça devrait fonctionner