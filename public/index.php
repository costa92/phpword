<?php
/**
 * Created by PhpStorm.
 * User: costa92
 * Date: 2016/11/16
 * Time: 下午9:02
 */
// 应用目录为当前目录
define('APP_PATH', dirname(__DIR__).'/');
// 开启调试模式
define('APP_DEBUG', true);
// 网站根URL
define('APP_URL', 'http://localhost/word');
// Autoload 自动载入
require '../vendor/autoload.php';

// 加载框架
require '../myphp/MyPHP.php';