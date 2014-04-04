<?php

/**
 * 自动回复 之 请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request;

use Glory\AutoReply\Request\RequestInterface;

abstract class AbstractRequest implements RequestInterface {

    protected $variables;

    public function addVariable($key, $val) {
        $this->variables[$key] = $val;
        return $this;
    }

    public function getVariable($key, $default) {
        return array_key_exists($key, $this->variables) ? $this->variables[$key] : $default;
    }

    public function removeVariable($key) {
        unset($this->variables[$key]);
        return $this;
    }

    public function setVariables($variables) {
        $this->variables = $variables;
        return $this;
    }

    public function getVariables() {
        return $this->variables;
    }

}
