<?php

namespace Glory\AutoReply\Rule;

use Glory\AutoReply\Request\RequestInterface;
use Glory\AutoReply\Response\ResponseInterface;
use Glory\AutoReply\Rule\RuleInterface;

/**
 * @author ForeverGlory
 */
abstract class AbstractRule implements RuleInterface {

    protected $conditions = array();
    protected $content;
    protected $sort;

    /**
     * @var boolean 
     */
    protected $status;

    /**
     * @var \Glory\AutoReply\Request\RequestInterface
     */
    protected $request;

    /**
     * @var \Glory\AutoReply\Response\ResponseInterface
     */
    protected $response;

    abstract function getRequestType();

    public function addCondition($condition) {
        $this->conditions[] = $condition;
        return $this;
    }

    public function setConditions($conditions) {
        $this->conditions = $conditions;
        return $this;
    }

    public function getConditions() {
        return $this->conditions;
    }

    public function setSort($sort) {
        $this->sort = $sort;
        return $this;
    }

    public function getSort() {
        return $this->sort;
    }

    /**
     * 设置状态
     * @param boolean $status
     * @return \Glory\AutoReply\Rule\Rule
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * 获取状态
     * @return boolean
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 设置请求
     * @param \Glory\AutoReply\Request\RequestInterface $request
     * @return \Glory\AutoReply\Rule\Rule
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
     * 设置回复
     * @param \Glory\AutoReply\Response\ResponseInterface $response
     * @return \Glory\AutoReply\Rule\Rule
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

}
