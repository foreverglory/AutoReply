<?php

/**
 * 坐标请求
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface LocationRequestInterface extends RequestInterface {

    public function setCoordinate(array $coordinate);

    public function getCoordinate();

    public function setScale($scale);

    public function getScale();

    public function setAddress($address);

    public function getAddress();
}
