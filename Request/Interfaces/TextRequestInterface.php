<?php

/**
 * 文本请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

use Glory\AutoReply\Request\Interfaces\RequestInterface;

interface TextRequestInterface extends RequestInterface {

    public function getText();

    public function setText($text);
}
