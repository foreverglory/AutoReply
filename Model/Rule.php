<?php

namespace Glory\AutoReply\Model;

use Glory\AutoReply\Request\RequestInterface;
use Glory\AutoReply\Response\ResponseInterface;
use Glory\AutoReply\Rule\RuleInterface;

/**
 * @author ForeverGlory
 */
abstract class Rule implements RuleInterface {

    protected $name;
    protected $content;
    protected $sort;
    protected $status;
    protected $request;
    protected $response;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setSort($sort) {
        $this->sort = $sort;
        return $this;
    }

    public function getSort() {
        return $this->sort;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setRequest(RequestInterface $request) {
        $this->request = $request;
        return $this;
    }

    public function getRequest() {
        return $this->request;
    }

    public function setResponse(ResponseInterface $response) {
        $this->response = $response;
        return $this;
    }

    public function getResponse() {
        return $this->response;
    }

}
