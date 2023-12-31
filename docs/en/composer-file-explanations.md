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
 - Close requirements definition
  ```json
      },
  ```
 - Close the json object
  ```json
  }
  ```