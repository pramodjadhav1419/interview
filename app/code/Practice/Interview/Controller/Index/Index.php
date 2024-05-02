<?php

namespace Practice\Interview\Controller\Index;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Practice\Interview\Model\CustomTableFactory;
class Index extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory ;
    protected $_customTableFactory;
    private $fruits = [];
    public function __construct(
        Context $Context, 
        PageFactory $resultFactory,
        CustomTableFactory $customTableFactory,
        array $fruits = []
        ){
            $this->_pageFactory  = $resultFactory;
            $this->_customTableFactory  = $customTableFactory;
            parent::__construct($Context); 
            $this->fruits = $fruits;           
        }

    public function execute(){
        var_dump($this->fruits);
        exit;
        $post = $this->getRequest()->getPostValue();

        if(!empty($post)){
           
            echo "first Line ::";
            $customtableFactoryObjec = $this->_customTableFactory->create();
            echo "27 Line ::";
            $customtableFactoryObjec->setData($post);
            $customtableFactoryObjec->save();
            
            $resultRedirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);            
            $resultRedirect->setUrl($this->_redirect->getRefererUrl()); // Redirect to the referring page
            return $resultRedirect;
        }

        $resultPage = $this->_pageFactory ->create();

        $resultPage->getConfig()->getTitle()->prepend(__("New Form"));
        return $resultPage;
    }
}