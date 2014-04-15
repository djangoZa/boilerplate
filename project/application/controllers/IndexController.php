<?php
class IndexController extends Rogers_Controller_Action
{
    private $_wordService;

    public function init()
    {
        parent::init();
        $this->_wordService = $this->_container->getService('Rogers_Word_Service');
    }

    public function indexAction()
    {
        $this->view->words = $this->_wordService->getRandomWords();
    }
}