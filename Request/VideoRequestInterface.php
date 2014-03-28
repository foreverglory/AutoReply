<?php

namespace Glory\AutoReply\Request;

/**
 * @author ForeverGlory
 */
interface VideoRequestInterface extends RequestInterface {

    public function setVideo($video);

    public function getVideo();
}
