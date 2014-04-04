<?php

/**
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Response\Interfaces;

interface ListResponseInterface extends ResponseInterface {

    public function setList(array $list);

    public function getList();

    public function addItem($item);

    public function removeItem($item);
}
