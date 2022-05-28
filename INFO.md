# Start local developing
- symfony server:start
# Require twig
- composer require "twig/twig:^2.0"
# Require apache and add .htaccess to public
- composer require symfony/apache-pack
# To start using Symfony UX
- composer require symfony/webpack-encore-bundle
# For SCSS file
- npm install sass-loader@^12.0.0 sass --save-dev^C

# For add maker
- composer require --dev symfony/maker-bundle
# Make new controller
- php bin/console make:controller

# Require doctrine
- composer require symfony/orm-pack
# Create new DB
- change .env
DATABASE_URL="mysql://admin:phpmyadmin@127.0.0.1:3306/symfony?serverVersion=5.7&charset=utf8mb4"
- php bin/console doctrine:database:create
# Make new model
- php bin/console make:entity EntityName
- or
- symfony console make:entity
# Update exist model
- php bin/console make:entity --regenerate
# Make new migration or update exist table
- php bin/console make:migration
# Do migrations
- php bin/console doctrine:migrations:migrate
# Require add fixtures and add some data in DB
- composer require --dev doctrine/doctrine-fixtures-bundle
- symfony console doctrine:fixtures:load

# For require security
- composer require symfony/security-bundle
# For create new user
- php bin/console make:user
# For make auth (login and logout)
- php bin/console make:auth
choose - Login form authenticator
# For make registration
- php bin/console make:registration-form
# For verify email
composer require symfonycasts/verify-email-bundle

# Show all services
- php bin/console debug:container
# Show all command
- php bin/console
# Show all routers
- symfony console debug:router

# For work with HTTP request
- composer require symfony/http-client