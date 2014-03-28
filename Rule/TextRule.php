<?php

namespace Glory\AutoReply\Rule;

use Glory\AutoReply\Request\RequestInterface;
use Glory\AutoReply\Request\TextRequestInterface;

/**
 * @author ForeverGlory
 */
class TextRule extends Rule {

    public function getRequestType() {
        return RequestInterface::Text;
    }

    /**
     * @return TextRequestInterface
     */
    public function getRequest() {
        return parent::getRequest();
    }

    public function validate() {
        if ($this->getRequest() instanceof TextRequestInterface) {
            foreach ($this->getConditions() as $condition) {
                if (preg_match($this->strToPreg($condition), $this->getRequest()->getText(), $matches)) {
                    $this->getResponse()->setVariables($matches);
                    return true;
                }
            }
        }
        return false;
    }

    private function strToPreg($str) {
        if ($str[0] != '/' || $str[strlen($str) - 1] != '/') {
            $str = '/' . str_replace(array('.', '?', '*', '\\', '/', '-'), array('\\.', '\\?', '(.*?)', '\\\\', '\\/', '\\-'), $str) . '/';
        }
        return $str;
    }

}
