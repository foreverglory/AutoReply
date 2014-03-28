<?php

namespace Glory\AutoReply\Request;

use Glory\AutoReply\Request\Content\ContentInterface;

/**
 * 自动回复 请求
 * @author ForeverGlory
 */
interface RequestInterface {

    const Text = 'text';
    const Image = 'image';
    const Voice = 'voice';
    const Video = 'video';
    const Location = 'location';
    const Link = 'link';
    const Event = 'event';

    public function getType();

    public function getResult();

    public function setContent(ContentInterface $content);

    public function getContent();

    public function setCreateTime(\DateTime $create_time);

    public function getCreateTime();
}
