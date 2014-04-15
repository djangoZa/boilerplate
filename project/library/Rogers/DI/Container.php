<?php
class Rogers_DI_Container extends Sensio_Pimple
{
    public function __construct()
    {
        $this->_setClients();
        $this->_setGateways();
        $this->_setRepositories();
        $this->_setServices();
    }

    public function getService($key)
    {
        $out = null;

        switch ($key) {
            case 'Rogers_Word_Service':
                $out = $this['Rogers_Word_Service'];
                break;
            default:
                throw new Exception("Container object ($key) does not exist");
        }

        return $out;
    }

    private function _setClients()
    {
        $this['Zend_Dom_Query'] = function($this)
        {
            $domQuery = new Zend_Dom_Query();
            return $domQuery;
        };

        $this['Zend_Http_Client'] = function($this)
        {
            $httpClient = new Zend_Http_Client();
            return $httpClient;
        };
    }

    private function _setGateways()
    {
        $this['Rogers_Word_Gateway'] = function($this)
        {
            $wordGateway = new Rogers_Word_Gateway($this['Zend_Http_Client'], $this['Zend_Dom_Query']);
            return $wordGateway;
        };
    }

    private function _setRepositories()
    {
        $this['Rogers_Word_Repository'] = function($this)
        {
            $wordRepository = new Rogers_Word_Repository($this['Rogers_Word_Gateway']);
            return $wordRepository;
        };
    }

    private function _setServices()
    {
        $this['Rogers_Word_Service'] = function($this)
        {
            $wordService = new Rogers_Word_Service($this['Rogers_Word_Repository']);
            return $wordService;
        };
    }
}