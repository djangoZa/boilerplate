<?php
class Rogers_Word_Service
{
    private $_wordRepository;

    public function __construct(Rogers_Word_Repository $wordRepository)
    {
        $this->_wordRepository = $wordRepository;
    }

    public function getRandomWords()
    {
        $count = rand(1, 100);
        $words = $this->_wordRepository->getRandomWords($count);
        return $words;
    }
}