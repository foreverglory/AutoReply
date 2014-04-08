<?php

/**
 * 音频请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface VoiceRequestInterface extends TextRequestInterface, MediaRequestInterface {

    public function setVoice($voice);

    public function getVoice();
}
