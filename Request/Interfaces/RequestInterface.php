<?php

/**
 * 请求 基础接口
 * @author ForeverGlory
 */

namespace Glory\AutoReply\Request\Interfaces;

interface RequestInterface {

    const Text = 'text';
    const Image = 'image';
    const Voice = 'voice';
    const Video = 'video';
    const Location = 'location';
    const Link = 'link';
    const Goods = 'goods';
    const Event = 'event';

    public function addVariable($key, $val);

    public function removeVariable($key);

    public function setVariables($variables);

    public function getVariables();

    public function getSource();
}
