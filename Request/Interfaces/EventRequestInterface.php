<?php

/**
 * 事件请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface EventRequestInterface extends RequestInterface {

    public function setEvent($event);

    public function getEvent();
}
