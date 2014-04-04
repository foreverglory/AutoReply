<?php

/**
 * 文本 模糊匹配
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Match;

class TextVagueMatch extends AbstractMatch {

    public function validate() {
        $checked = false;
        if (strpos($this->pattern, '*') === false) {
            $checked = strcasecmp($this->original, $this->pattern) == 0 ? true : false;
            if ($checked) {
                $this->matches = array($this->original);
            }
        } else {
            $textRegexMatch = new TextRegexMatch($this->original, '/' . str_replace('*', '(.*?)', $this->pattern) . '/');
            $checked = $textRegexMatch->validate();
            if ($checked) {
                $this->matches = $textRegexMatch->matches();
            }
        }
        return $checked;
    }

}
