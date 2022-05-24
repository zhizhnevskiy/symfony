# Start local developing
- symfony server:start
# Require twig
- composer require "twig/twig:^2.0"
# Require doctrine
- composer require symfony/orm-pack
- composer require --dev symfony/maker-bundle
# Require apache and add .htaccess to public
- composer require symfony/apache-pack