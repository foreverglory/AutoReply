<?php

/**
 * 视频请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface VideoRequestInterface extends ImageRequestInterface, VoiceRequestInterface {

    public function setVideo($video);

    public function getVideo();
}
