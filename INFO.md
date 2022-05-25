# Start local developing
- symfony server:start
# Require twig
- composer require "twig/twig:^2.0"
# Require doctrine
- composer require symfony/orm-pack
- composer require --dev symfony/maker-bundle
# Require apache and add .htaccess to public
- composer require symfony/apache-pack
# To start using Symfony UX
- composer require symfony/webpack-encore-bundle
# For SCSS file
- npm install sass-loader@^12.0.0 sass --save-dev^C

# For add maker
- composer require --dev symfony/maker-bundle
# Show command
- php bin/console
# Make new controller
- php bin/console make:controller
# Create new DB
- change .env
DATABASE_URL="mysql://admin:phpmyadmin@127.0.0.1:3306/symfony?serverVersion=5.7&charset=utf8mb4"
- php bin/console doctrine:database:create
# Make new model
- php bin/console make:entity EntityName
# Update exist model
- php bin/console make:entity --regenerate
# Make new migration or update exist table
- php bin/console make:migration
# Do migrations
- php bin/console doctrine:migrations:migrate