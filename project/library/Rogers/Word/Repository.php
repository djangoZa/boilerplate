<?php
class Rogers_Word_Repository
{
    private $_wordGateway;

    public function __construct(Rogers_Word_Gateway $wordGateway)
    {
        $this->_wordGateway = $wordGateway;
    }

    public function getRandomWords($count = 1)
    {
        $out = array();
        $words = $this->_wordGateway->getRandomWords($count);
        foreach ($words as $word) {
            $out[] = new Rogers_Word(array(
                'value' => $word
            ));
        }
        return $out;
    }
}