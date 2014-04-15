<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace(array('Zend_', 'Rogers_', 'Sensio_'));
        return $autoloader;
    }
}