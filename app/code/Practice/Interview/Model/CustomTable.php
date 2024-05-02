<?php

namespace Practice\Interview\Model;
use Magento\Framework\Model\AbstractModel;
use Practice\Interview\Model\ResourceModel\CustomResource;
class CustomTable extends AbstractModel{
    protected function _construct(){
        $this->_init(CustomResource::class);
    }
}