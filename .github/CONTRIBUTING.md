# Contributing rules for the repository

To contribute into the current repository <https://github.com/J9rem/LehyenSkang>, you should follow these rules.

## Languages

 1. the language used for comments and code is English.
 2. the prefered language for issues and pull-request is English but French is accepted.

## Structure of the code

In this repository, only basic `php` files should be defined. Main content should be defined in <https://github.com/J9rem/LehyenSkangApp>. This application is loaded via `composer` in `vendor` folder.

This repository is mainly for documentation, composer requirements, docker files, github actions and other actions needed at head repository.

```
/content/                  // folder to define content of the site in markdown
/docs/                     // documentation
/private/                  // private files as databases or cache
/public/                   // public files for images by examples
/public/api/index.php      // api route (to be able to isolate cookies)
/public/api/auth/index.php // auth route (to be able to isolate cookies)
/sites/                    // same as content but for subsites
/vendor/                   // composer dependencies
```

## Maintainers

Current maintainers of this repository are :
 - Jérémy Dufraisse - J9rem <https://github.com/J9rem>, since 2023

## Commits

 - commits should be name as in https://www.conventionalcommits.org/en/v1.0.0/ revisions v1.0.0 or after if stable
 - commit should represent a small change
 - feature or big changes should be done via multiple commits
 - the branch should be rebase on top before merge with a commit merge (no fast fordwarding)

## Branch names

 - for a new feature, `feat/my-feature`
 - for a fix, or an improvement of a feature, `fix/my-feature-name`
 - for a bugfix, `bugfix/bug-name`
 - banches are referenced to a version named branch as `v1.x.x`
