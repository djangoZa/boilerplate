<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initContainer()
    {
        //init symfony container
    }

    public function getContainer()
    {
        return 'container';
    }
}