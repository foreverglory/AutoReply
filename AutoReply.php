<?php

namespace Glory\AutoReply;

use Glory\AutoReply\Request\RequestInterface;
use Glory\AutoReply\Response\ResponseInterface;
use Glory\AutoReply\Rule\RuleInterface;

/**
 * @author ForeverGlory
 */
class AutoReply {

    protected $request;
    protected $response;
    protected $rules;

    public function __construct(RequestInterface $request, array $rules = array(), ResponseInterface $response = null) {
        $this->setRequest($request);
        $this->setRules($rules);
        $this->setResponse($response);
    }

    public function setRequest(RequestInterface $request) {
        $this->request = $request;
        return $this;
    }

    public function getRequest() {
        return $this->request;
    }

    public function addRule(RuleInterface $rule) {
        $this->rules[] = $rule;
        return $this;
    }

    public function setRules($rules = array()) {
        foreach ($rules as $rule) {
            $this->addRule($rule);
        }
        return $this;
    }

    public function getRules() {
        foreach ($this->rules as $rule) {
            
        }
        return $this->rules;
    }

    public function setResponse(ResponseInterface $response) {
        $this->response = $response;
        return $this;
    }

    public function getResponse() {
        return $this->response;
    }

    public function validate() {
        foreach ($this->getRules() as $rule) {
            if ($rule->getStatus()) {
                $rule->setRequest($this->getRequest());
                if ($rule->validate()) {
                    $this->setResponse($rule->getResponse());
                    return true;
                }
            }
        }
        return $this->getResponse() ? true : false;
    }

    private function initResponse() {
        
    }

}
