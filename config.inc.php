<?php

/** 开启https */
define('__TYPECHO_SECURE__',true);
/** 定义根目录 */
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));
/** 定义插件目录(相对路径) */
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');
/** 定义模板目录(相对路径) */
define('__TYPECHO_THEME_DIR__', '/usr/themes');
/** 后台路径(相对路径) */
define('__TYPECHO_ADMIN_DIR__', '/admin/');
/** 设置包含路径 */
@set_include_path(get_include_path() . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . '/var' . PATH_SEPARATOR .
__TYPECHO_ROOT_DIR__ . __TYPECHO_PLUGIN_DIR__);
/** 载入API支持 */
require_once 'Typecho/Common.php';
/** 程序初始化 */
Typecho_Common::init();
/** 定义数据库参数 */
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
