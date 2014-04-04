<?php

/**
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Match;

abstract class AbstractMatch implements MatchInterface {

    protected $original;
    protected $pattern;
    protected $matches;

    public function __construct($original, $pattern) {
        $this->original = $original;
        $this->pattern = $pattern;
    }

    abstract public function validate();

    public function setOriginal($original) {
        $this->original = $original;
        return $this;
    }

    public function setPattern($pattern) {
        $this->pattern = $pattern;
        return $this;
    }

    public function matches() {
        return $this->matches;
    }

}
