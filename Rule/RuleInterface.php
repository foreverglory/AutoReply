<?php

namespace Glory\AutoReply\Rule;

/**
 * 自动回复规则
 * @author ForeverGlory
 */
interface RuleInterface {

    public function getRequestType();

    public function addCondition($condition);

    public function setConditions($conditions);

    public function getConditions();

    public function setStatus($status);

    public function getStatus();

    public function setSort($sort);

    public function getSort();

    public function setRequest(\Glory\AutoReply\Request\RequestInterface $request);

    public function getRequest();

    public function validate();

    public function setResponse(\Glory\AutoReply\Response\ResponseInterface $response);

    public function getResponse();
}
