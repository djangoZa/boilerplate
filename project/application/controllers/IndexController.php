<?php
class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $domQuery = new Zend_Dom_Query();
        $httpClient = new Zend_Http_Client();
        $wordGateway = new Rogers_Word_Gateway($httpClient, $domQuery);
        $wordRepository = new Rogers_Word_Repository($wordGateway);
        $wordService = new Rogers_Word_Service($wordRepository);
        $this->view->words = $wordService->getRandomWords();
    }
}