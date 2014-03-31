<?php

namespace Glory\AutoReply\Response;

/**
 * @author ForeverGlory
 */
interface ResponseInterface {

    public function getResult();

    public function addVariable($variable);

    public function setVariables($variables);

    public function getVariables();
}
