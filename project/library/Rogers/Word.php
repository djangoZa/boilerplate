<?php
class Rogers_Word
{
    private $_value;

    public function __construct(Array $options)
    {
        $this->_value = $options['value'];
    }

    public function getValue()
    {
        return $this->_value;
    }
}