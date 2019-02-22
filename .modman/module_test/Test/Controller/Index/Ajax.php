<?php
namespace Ecommage\Test\Controller\Index;

use Magento\Framework\App\Action\Context;
use \Magento\Framework\Controller\ResultFactory;

class Ajax extends \Magento\Framework\App\Action\Action
{
    public $_resultFactory;
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute(){
//        die("abc");
        $data = $this->getRequest()->getParams();
//        $isAjax = $this->getRequest()->getActionName();
//        var_dump($data);die;
        $data_res = [
            "msg" => "succes",
            "err" => "0"
        ];
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        if(isset($data)){
            return $resultJson->setData($data_res);
        }else{
            $data_res = [
                "msg" => "false",
                "err" => "1"
            ];
            return $resultJson->setData($data_res);
        }
    }
}