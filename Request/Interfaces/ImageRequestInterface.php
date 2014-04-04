<?php

/**
 * 图片请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface ImageRequestInterface extends RequestInterface {

    public function setImage($image);

    public function getImage();
}
