# Explanations on content of file `composer.json`

_[Version française](../fr/explications-du-fichier-composer.md)_

The file `composer.json` is located in the root folder of the project.

 - Open an json object
  ```json
  {
  ```
 - Define name of the project for composer
  ```json
      "name": "j9rem/lehyen-skang",
  ```
 - Define location of README file
  ```json
      "readme": "README.md",
  ```
 - Give the license of the project
  ```json
      "license": "EUPL-1.2",
  ```
 - Give details about the project (description, keywords, homepage)
  ```json
      "description": "Main package of LehyenSkang project for a light CMS based on PicoCMS",
      "keywords": [ "pico", "picocms","lehyenskang"],
      "homepage": "https://github.com/J9rem/LehyenSkang",
  ```
 - Define authors
  ```json
      "authors": [
        {
          "name": "Jérémy Dufraisse",
          "homepage": "https://github.com/J9rem",
          "role": "Lead developer"
        }
      ],
  ```
 - Give links to support, issues
  ```json
      "support": {
        "docs": "https://github.com/J9rem/LehyenSkang/src/branch/master/README.md",
        "issues": "https://github.com/J9rem/LehyenSkang/issues",
        "source": "https://github.com/J9rem/LehyenSkang"
      },
  ```
 - Prefer stable revisions when available in dependencies
  ```json
      "prefer-stable": true,
  ```
 - Authorize to use `dev` revision
  ```json
      "minimum-stability": "dev",
  ```
 - Open requirements definition
  ```json
      "require": {
  ```
 - Require `php` revision 7 higher than 7.4 (included) or revision 8 higher than 8.1 (included)
  ```json
        "php": "^7.4||^8.1",
  ```
 - Require `php` extension (needed by PicoCMS by example). This is useful for options defined above.
  ```json
        "ext-dom": "*",
        "ext-filter": "*",
        "ext-json": "*",
        "ext-mbstring": "*",
        "ext-pcre": "*",
  ```
 - Choose specific revision for `parsedown` and fake them as the ones asked by `PicoCMS` (because revision asked by `PicoCMS` are not rightly defined to be included with `composer` without warnings)
  ```json
        "erusev/parsedown": "2.0.0-beta-1 as 1.7.4",
        "erusev/parsedown-extra": "2.0.0-beta-1 as 0.8.1",
  ```
 - Require main app
  ```json
        "j9rem/lehyen-skang-app": "dev-master",
  ```
 - Require `composerInstaller` for `Pico` but install it before `Pico` to be sure it is activated before importing plugins
  ```json
        "picocms/composer-installer": "dev-pico-3.0",
  ```
 - Require default theme of `Pico` at specific commit to prevent errors
  ```json
        "picocms/pico-theme": "dev-pico-3.0#f322a0bbdd115ee1ad14fc50b96a07e79b2a9bd4"
  ```
 - Close requirements definition
  ```
      },
  ```
 - Open config
  ```json
      "config": {
  ```
 - Choose to optimize autoloader (create a cached classmap, faster when executing but takes some place)
  ```json
        "optimize-autoloader": true,
  ```
 - Choose packages' revision to be compatible with `php 7.4`
  ```json
        "platform": {
            "php": "7.4"
        },
  ```
 - When executing, check if the right `php` revision is excuting, and if the needed extensions are installed, otherwise, display an explicit error message.
  ```json
        "platform-check": true,
  ```
 - When requiring a new package, sort the list of packages
  ```json
        "sort-packages": true,
  ```
 - Define rights for plugins
  ```json
        "allow-plugins": {
            "picocms/composer-installer": true,
            "topfloor/composer-cleanup-vcs-dirs": false
        }
  ```
 - Close config
  ```
      },
  ```
 - Define extra parameters used by `composer installer`
  ```json
      "extra": {
        "pico-plugin-dir": "vendor/picocms/plugins/",
        "pico-theme-dir": "vendor/picocms/themes/"
      },
  ```
 - Open scripts definition
  ```json
      "scripts": {
  ```
 - Start `ComposerInstaller` after each `autoload dump`
  ```json
        "post-autoload-dump": [
            "picocms\\ComposerInstaller\\Installer::postAutoloadDump"
        ],
  ```
 - Define script to create an archive with command line `composer auto-archive`
  ```json
        "auto-archive": [
            "@composer install --no-dev",
            "@composer archive --format=zip --dir=archives"
        ]
  ```
 - Close scripts definition
  ```
      },
  ```
 - Define parameters for archive, especially excluded files
  ```json
      "archive": {
        "exclude": ["node_modules","/archives","/*.zip","/*.gz","/*.bz2","vendor/picocms/plugins/*/tests/"]
      },
  ```
 - Gives localization of `LehyenSkangApp` because not already registered on `packagist`
  ```json
      "repositories": {
        "j9rem/lehyen-skang-app": {
            "type": "vcs",
            "url": "https://github.com/J9rem/LehyenSkangApp"
        }
      },
  ```
 - Close the json object
  ```
  }
  ```