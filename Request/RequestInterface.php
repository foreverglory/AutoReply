<?php

namespace Glory\AutoReply\Request;

/**
 * 自动回复 获取请求内容
 * @author ForeverGlory
 */
interface RequestInterface {

    public function getResult();

    public function getToUserName();

    public function getFromUserName();

    public function getCreateTime();
}
