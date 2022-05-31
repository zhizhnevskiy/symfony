# Start local developing symfony
- symfony server:start
# Start local developing npm
- npm run watch
# Start watch and build tailwindcss
- npx tailwindcss -i ./assets/styles/app.css -o ./public/build/app.css --watch

# Before command use 'symfony console' or 'php bin/console'

# Require twig
- composer require "twig/twig:^2.0"
# Require apache and add .htaccess to public
- composer require symfony/apache-pack
# Require asset
- composer require symfony/asset
# To start using Symfony UX and webpack
- composer require symfony/webpack-encore-bundle
# For SCSS file
- npm install sass-loader@^12.0.0 sass --save-dev^C
# For download files
- npm install file-loader --save-dev
# For work with HTTP request
- composer require symfony/http-client
# For Validation Entity
- composer require symfony/validator doctrine/annotations

# For adding Tailwind
- composer require -D tailwindcss postcss-loader purgecss-webpack-plugin glob-all path
- composer require -D tailwindcss
  For create postcss.config.js and tailwind.config.js
- npx tailwindcss init -p
  Update postcss.config.js, tailwind.config.js, webpack.config.js and assets/styles/app.css
  Run to compile tailwind

# For add maker
- composer require --dev symfony/maker-bundle
# Make new controller
- symfony console make:controller

# Require doctrine
- composer require symfony/orm-pack
# Create new DB
- change .env
  DATABASE_URL="mysql://admin:phpmyadmin@127.0.0.1:3306/symfony?serverVersion=5.7&charset=utf8mb4"
- symfony console doctrine:database:create
# Make new model or add new row
- symfony console make:entity EntityName
# Update exist model
- symfony console make:entity --regenerate
# Make new migration or update exist table
- symfony console make:migration
# Do migrations
- symfony console doctrine:migrations:migrate
# Require add fixtures and add some data in DB
- composer require --dev doctrine/doctrine-fixtures-bundle
- symfony console doctrine:fixtures:load
# Fof adding Form
- composer require symfony/form
# Fof create new form for Entity
- symfony console make:form NameFormType NameEntity

# For require security
- composer require symfony/security-bundle
# For create new user
- symfony console make:user
# For make registration
- symfony console make:registration-form
# For make auth (login and logout)
- symfony console make:auth
  choose - Login form authenticator
# For verify email
composer require symfonycasts/verify-email-bundle

# Show all command
- symfony console
# Show all services
- symfony console debug:container
# Show all routers
- symfony console debug:router
