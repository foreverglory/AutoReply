<?php

namespace Glory\AutoReply\Request;

use Glory\AutoReply\Request\RequestInterface;
use Glory\AutoReply\Request\AbstractRequest;



/**
 * @author ForeverGlory
 */
class TextRequest extends AbstractRequest {

    protected $model;

    public function getType() {
        return RequestInterface::Text;
    }

    /**
     * 获取请求结果
     */
    public function getResult() {
        ;
    }

    public function getContent() {
        
    }

    public function setContent(Content\ContentInterface $content) {
        
    }

}
