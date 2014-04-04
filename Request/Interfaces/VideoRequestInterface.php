<?php

/**
 * 视频请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface VideoRequestInterface extends RequestInterface {

    public function setVideo($video);

    public function getVideo();
}
