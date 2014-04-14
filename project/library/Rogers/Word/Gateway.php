<?php
class Rogers_Word_Gateway
{
    private $_httpClient;
    private $_domQuery;
    private $_wordUri = "http://www.lipsum.com/feed/html";

    public function __construct(
        Zend_Http_Client $httpClient,
        Zend_Dom_Query $domQuery
    )
    {
        $this->_httpClient = $httpClient;
        $this->_domQuery = $domQuery;
    }

    public function getRandomWords($count = 1)
    {
        $words = array();

        //get the words from the lipsum website
        $this->_httpClient->setUri($this->_wordUri);
        $response = $this->_httpClient->request();
        $body = $response->getBody();

        //get each paragraph of the lipsum website
        $this->_domQuery->setDocumentHtml($body);
        $paragraphs = $this->_domQuery->query('#lipsum p');

        //fill the output with strings until it has reached its required count
        foreach ($paragraphs as $paragraph) {
            $strings = explode(' ', $paragraph->nodeValue);
            foreach ($strings as $string) {
                $words[] = $string;
                if (count($words) >= $count) {
                    break;
                }
            }
        }

        return $words;
    }
}