<?php

namespace Glory\AutoReply;

use Glory\AutoReply\Request\RequestInterface;
use Glory\AutoReply\Response\ResponseInterface;
use Glory\AutoReply\Rule\RuleInterface;

/**
 * @author ForeverGlory
 */
class AutoReply {

    /**
     * @var \Glory\AutoReply\Request\RequestInterface 
     */
    protected $request;

    /**
     * @var \Glory\AutoReply\Response\ResponseInterface
     */
    protected $response;

    /**
     * @var array
     */
    protected $rules;

    public function __construct() {
        
    }

    /**
     * 设置请求
     * @param \Glory\AutoReply\Request\RequestInterface $request
     * @return \Glory\AutoReply\AutoReply
     */
    public function setRequest(RequestInterface $request) {
        $this->request = $request;
        return $this;
    }

    /**
     * 获取请求
     * @return \Glory\AutoReply\Request\RequestInterface
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * 添加规则
     * @param \Glory\AutoReply\Rule\RuleInterface $rule
     * @return \Glory\AutoReply\AutoReply
     */
    public function addRule(RuleInterface $rule) {
        $this->rules[] = $rule;
        return $this;
    }

    /**
     * 设置规则
     * @param array $rules
     * @return \Glory\AutoReply\AutoReply
     */
    public function setRules($rules = array()) {
        foreach ($rules as $rule) {
            $this->addRule($rule);
        }
        return $this;
    }

    /**
     * 返回所有规则
     * @return array
     */
    public function getRules() {

        var_dump($this->rules);
        die;
        foreach ($this->rules as $rule) {
            
        }
        return $this->rules;
    }

    /**
     * 设置回复
     * @param \Glory\AutoReply\Response\ResponseInterface $response
     * @return \Glory\AutoReply\AutoReply
     */
    public function setResponse(ResponseInterface $response) {
        $this->response = $response;
        return $this;
    }

    /**
     * 获取回复
     * @return \Glory\AutoReply\Response\ResponseInterface
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * 验证是否符合规则
     * @return boolean
     */
    public function validate() {
        foreach ($this->getRules() as $rule) {
            $valiDate = new Validate($this->getRequest(), $rule);
            if ($valiDate->validate()) {
                $this->setResponse($valiDate->getResponse());
                return true;
            }
        }
        return $this->getResponse() ? true : false;
    }

    /**
     * 获取结果
     * @return type
     */
    public function getResult() {
        if ($this->getResponse()) {
            return $this->getResponse()->getResult();
        }
    }

}
