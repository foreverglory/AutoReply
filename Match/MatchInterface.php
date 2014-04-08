<?php

/**
 * 对比 接口
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Match;

interface MatchInterface {

    public function setOriginal($original);

    public function setPattern($pattern);

    public function validate();

    public function matches();
}
