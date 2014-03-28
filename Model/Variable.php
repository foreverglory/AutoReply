<?php

namespace Glory\AutoReply\Model;

/**
 * @author ForeverGlory
 */
class Variable {

    protected $key;
    protected $value;

    public function setKey($key) {
        $this->key = $key;
        return $this;
    }

    public function getKey() {
        return $this->key;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function getValue() {
        return $this->value;
    }

}
