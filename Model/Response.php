<?php

namespace Glory\AutoReply\Model;

use Glory\AutoReply\Response\ResponseInterface;
use Glory\AutoReply\Model\Variable;

/**
 * @author ForeverGlory
 */
abstract class Response implements ResponseInterface {

    protected $variables;

    public function addVariable(Variable $variable) {
        $this->variables[] = $variable;
        return $this;
    }

    public function removeVariables() {
        
    }

    public function setVariables($variables) {
        $this->variables = $variables;
        return $this;
    }

    public function getVariables() {
        return $this->variables;
    }

}
