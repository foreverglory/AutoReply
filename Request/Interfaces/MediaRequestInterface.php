<?php

/**
 * 多媒体 请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface MediaRequestInterface extends RequestInterface {

    public function setMediaUrl($url);

    public function getMediaUrl();

    public function setMediaBin($bin);

    public function getMediaBin();
}
