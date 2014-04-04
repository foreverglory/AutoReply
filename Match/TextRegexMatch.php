<?php

/**
 * 文本 正则表达式
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Match;

class TextRegexMatch extends AbstractMatch {

    public function validate() {
        return preg_match($this->pattern, $this->original, $this->matches);
    }

}
