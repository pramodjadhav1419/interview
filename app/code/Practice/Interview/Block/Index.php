<?php

namespace Practice\Interview\Block;

class Index extends \Magento\Framework\view\Element\Template{

    protected $_filePath = "";
    public function __construct(\Magento\Framework\View\Element\Template\Context $context , $_filePath)
    {
    parent::__construct($context);
    $this->_filePath =  $_filePath;
    }
}