<?php

/**
 * 列表 回复
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Response;

use Glory\AutoReply\Response\Interfaces\ListResponseInterface;
use Glory\AutoReply\Response\AbstractResponse;

class ListResponse extends AbstractResponse implements ListResponseInterface {

    protected $list = array();

    public function addItem($item) {
        $this->list[] = $item;
        return $this;
    }

    public function getList() {
        return $this->list;
    }

    public function removeItem($item) {
        foreach ($this->list as $key => $val) {
            if (array_diff($item, $val)) {
                unset($this->list[$key]);
            }
        }
        return $this;
    }

    public function setList(array $list) {
        $this->list = $list;
        return $this;
    }

}
