<?php

/**
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Rule\Interfaces;

interface RuleInterface {

    public function getRequestType();

    public function addCondition($condition);

    public function setConditions($conditions);

    public function getConditions();

    public function setStatus($status);

    public function getStatus();

    public function setSort($sort);

    public function getSort();

    public function setRequest(\Glory\AutoReply\Request\Interfaces\RequestInterface $request);

    public function getRequest();

    public function validate();

    public function setResponse(\Glory\AutoReply\Response\Interfaces\ResponseInterface $response);

    public function getResponse();
}
