<?php

namespace Glory\AutoReply\Model;

use Glory\AutoReply\Response\ResponseInterface;

/**
 * @author ForeverGlory
 */
abstract class Response implements ResponseInterface {

    protected $variables;

    public function addVariable($variable) {
        $this->variables[] = $variable;
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
