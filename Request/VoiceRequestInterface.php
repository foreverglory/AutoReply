<?php

namespace Glory\AutoReply\Request;

/**
 * @author ForeverGlory
 */
interface VoiceRequestInterface extends RequestInterface {

    public function setVoice($voice);

    public function getVoice();
}
