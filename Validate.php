<?php

namespace Glory\AutoReply;

use Glory\AutoReply\Request\RequestInterface;
use Glory\AutoReply\Response\ResponseInterface;
use Glory\AutoReply\Rule\RuleInterface;

/**
 * 认证自动回复
 * @author ForeverGlory
 */
class Validate {

    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var ResponseInterface 
     */
    protected $response;

    /**
     * @var RuleInterface 
     */
    protected $rule;

    /**
     * 实例化
     * @param \Glory\AutoReply\Request\RequestInterface $request 请求
     * @param \Glory\AutoReply\Rule\RuleInterface $rule 规则
     */
    public function __construct(RequestInterface $request, RuleInterface $rule) {
        $this->setRequest($request)->setRule($rule);
    }

    /**
     * 设置请求
     * @param type $request
     * @return \Glory\AutoReply\AutoReplyValidate
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * 请求
     * @return RequestInterface
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * 设置规则
     * @param \Glory\AutoReply\Rule\RuleInterface $rule
     * @return \Glory\AutoReply\AutoReplyValidate
     */
    public function setRule(RuleInterface $rule) {
        $this->rule = $rule;
        return $this;
    }

    /**
     * 规则
     * @return \Glory\AutoReply\Rule\RuleInterface
     */
    public function getRule() {
        return $this->rule;
    }

    /**
     * 设置回复
     * @param \Glory\AutoReply\Response\ResponseInterface $response
     * @return \Glory\AutoReply\AutoReplyValidate
     */
    public function setResponse(ResponseInterface $response) {
        $this->response = $response;
        return $this;
    }

    /**
     * 回复
     * @return \Glory\AutoReply\Response\ResponseInterface
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * 认证请求跟规则是否匹配
     * @return boolean
     */
    public function validate() {
        $access = false;
        if ($this->getRule()->getRequestType() === $this->getRequest()->getType()) {
            $access = $this->getRule()->validate();
            if ($access) {
                $this->setResponse($this->getRule()->getResponse());
            }
        }
        return $access;
    }

    /**
     * 回复内容
     * @return type
     */
    public function getResult() {
        return $this->getResponse()->getResult();
    }

}
