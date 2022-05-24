# Start local developing
- symfony server:start
# Require twig
- composer require "twig/twig:^2.0"
# Require doctrine
- composer require symfony/orm-pack
- composer require --dev symfony/maker-bundle
# Require apache and add .htaccess to public
- composer require symfony/apache-pack
# to start using Symfony UX
- composer require symfony/webpack-encore-bundle
# for SCSS file
- npm install sass-loader@^12.0.0 sass --save-dev^C
# for add maker
composer require --dev symfony/maker-bundle