<?php

namespace Glory\AutoReply\Request;

/**
 * @author ForeverGlory
 */
interface TextRequestInterface {

    public function getText();

    public function setText($text);
}
