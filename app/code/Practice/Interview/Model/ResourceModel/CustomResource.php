<?php

namespace Practice\Interview\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class CustomResource extends AbstractDb{
    public function _construct(){
        $this->_init("interview" , "id");
    }
}