<?php

namespace Glory\AutoReply\Model;

use Glory\AutoReply\Model\Request;
use Glory\AutoReply\Request\TextRequestInterface;

/**
 * @author ForeverGlory
 */
class TextRequest extends Request implements TextRequestInterface {

    protected $text;

    /**
     * 获取请求结果
     */
    public function getResult() {
        ;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    public function getText() {
        return $this->text;
    }

}
