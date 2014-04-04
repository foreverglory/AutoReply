<?php

/**
 * 链接请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface LinkRequestInterface extends RequestInterface {

    public function setUrl($url);

    public function getUrl();

    public function setTitle($title);

    public function getTitle();

    public function setDescription($description);

    public function getDescription();
}
