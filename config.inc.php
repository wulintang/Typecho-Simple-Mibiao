<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new Typecho_Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
  'host' => $_ENV["TYPECHO_HOST"],
  'user' => $_ENV["TYPECHO_USERNAME"],
  'password' => $_ENV["TYPECHO_PASSWORD"],
  'charset' => 'utf8mb4',
  'port' => $_ENV["TYPECHO_PORT"],
  'database' => $_ENV["TYPECHO_NAME"],
  'engine' => 'MyISAM',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);
