# Processmaker Pmpkg Lang Tw
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/pmpkg-lang-tw.git
cd pmpkg-lang-tw
php rename-project.php pmpkg-lang-tw
composer install
npm install
npm run dev
```

## Installation
* Use `composer require processmaker/pmpkg-lang-tw` to install the package.
* Use `php artisan pmpkg-lang-tw:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan pmpkg-lang-tw:uninstall` to uninstall the package
* Use `composer remove processmaker/pmpkg-lang-tw` to remove the package completely
