<?php
//Define path to application directory
defined('APPLICATION_PATH') || 
    define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

//Define application environment
defined('APPLICATION_ENV') || 
    define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

//Set the include paths
set_include_path(implode(PATH_SEPARATOR, $paths = array(
    APPLICATION_PATH . '/../library',
    '.'
)));

//Run the application
require_once 'Zend/Application.php';
$application = new Zend_Application(APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini');
$application->bootstrap()->run();