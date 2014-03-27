<?php

namespace Glory\AutoReply\Model;

use Glory\AutoReply\Request\RequestInterface;

/**
 * @author ForeverGlory
 */
abstract class Request implements RequestInterface {

    const Text = 'text';
    const Image = 'image';
    const Voice = 'voice';
    const Video = 'video';
    const Location = 'location';
    const Link = 'link';

    protected $content;
    protected $create_time;
    protected $from_user_name;
    protected $to_user_name;

    public function __construct() {
        ;
    }

    public function setCreateTime($create_time) {
        $this->create_time = $create_time;
        return $this;
    }

    public function getCreateTime() {
        return $this->create_time;
    }

    public function setFromUserName($from_user_name) {
        $this->from_user_name = $from_user_name;
        return $this;
    }

    public function getFromUserName() {
        return $this->from_user_name;
    }

    public function setToUserName($to_user_name) {
        $this->to_user_name = $to_user_name;
        return $this;
    }

    public function getToUserName() {
        return $this->to_user_name;
    }

}
