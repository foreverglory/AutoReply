<?php

/**
 * 文本 回复
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Response;

use Glory\AutoReply\Response\Interfaces\TextResponseInterface;
use Glory\AutoReply\Response\AbstractResponse;

class TextResponse extends AbstractResponse implements TextResponseInterface {

    protected $text;

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
        return $this;
    }

}
