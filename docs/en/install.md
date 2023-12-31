# Installation's documentation of `LehyenSkang` for developers

_[Version française](../fr/installation.md)_

## Requirements

 - a [PHP](https://php.net) server with revision `7.4` or higher
 - a webserver
 - [`composer`](https://getcomposer.org)
 - [`git`](https://git-scm.com)

## Method

 - clone the repository
   ```bash
   git clone https://github.com/J9rem/LehyenSkang.git my-repo
   cd my-repo
   ```
 - or create a new local folder linked to this project
   ```bash
   mkdir my-repo
   cd my-repo
   git init
   git remote add origin https://github.com/J9rem/LehyenSkang.git
   git fetch
   git checkout master
   ```
 - then install dependencies with `composer`
   ```bash
   composer install
   ```
 - set your webver to display the file `index.php` and it should work