<?php

/**
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Response\Interfaces;

interface TextResponseInterface extends ResponseInterface {

    public function setText($text);

    public function getText();
}
