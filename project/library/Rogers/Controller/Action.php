<?php
class Rogers_Controller_Action extends Zend_Controller_Action
{
    protected $_container;

    public function init()
    {
        $this->_setContainer();
    }
    private function _setContainer()
    {
        $this->_container = new Rogers_DI_Container();
    }
}