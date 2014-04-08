<?php

/**
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request;

use Glory\AutoReply\Request\Interfaces\TextRequestInterface;
use Glory\AutoReply\Request\AbstractRequest;

class TextRequest extends AbstractRequest implements TextRequestInterface {

    protected $text;

    public function getType() {
        \Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST;
        return RequestInterface::Text;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    public function getText() {
        return $this->text;
    }

    public function getSource() {
        return $this->getText();
    }

}
