<?php

namespace Glory\AutoReply\Request;

/**
 * @author ForeverGlory
 */
interface LinkRequestInterface {

    public function setLinkUrl($url);

    public function getLinkUrl();

    public function setLinkTitle($title);

    public function getLinkTitle();

    public function setLinkDescription($description);

    public function getLinkDescription();
}
