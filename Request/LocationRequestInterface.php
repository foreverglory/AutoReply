<?php

namespace Glory\AutoReply\Request;

/**
 * @author ForeverGlory
 */
interface LocationRequestInterface extends RequestInterface {

    public function setLocationCoordinate(array $coordinate);

    public function getLocationCoordinate();

    public function setLocationScale($scale);

    public function getLocationScale();

    public function setLocationLabel($label);

    public function getLocationLabel();
}
