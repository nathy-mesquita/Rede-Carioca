<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=humhub',
      'username' => 'humhubuser',
      'password' => 'nucap2019',
      'charset' => 'utf8',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_MailTransport',
      ),
      'view' => 
      array (
        'theme' => 
        array (
          'name' => 'HumHub',
          'basePath' => 'C:/wamp64/www/humhub/humhub/themes\\HumHub',
          'publishResources' => false,
        ),
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
    'view' => 
    array (
      'theme' => 
      array (
        'name' => 'HumHub',
        'basePath' => 'C:/wamp64/www/humhub/humhub/themes\\HumHub',
        'publishResources' => false,
      ),
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1557251028,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'Rede Carioca',
  'language' => 'pt',
); ?>