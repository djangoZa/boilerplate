<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace(array('Zend_', 'Rogers_'));
        return $autoloader;
    }

    protected function _initContainer()
    {
        //init symfony container
    }
}