<?php

namespace Glory\AutoReply\Request;

use Glory\AutoReply\Request\RequestInterface;

/**
 * @author ForeverGlory
 */
abstract class AbstractRequest implements RequestInterface {

    protected $content;
    protected $create_time;

    public function __construct() {
        
    }

    public function setCreateTime(\DateTime $create_time) {
        $this->create_time = $create_time;
        return $this;
    }

    public function getCreateTime() {
        return $this->create_time;
    }

}
