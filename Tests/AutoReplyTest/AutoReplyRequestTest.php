<?php

/**
 * @author ForeverGlory
 */

namespace AutoReplyTest;

use Glory\AutoReply\Request;

class AutoReplyRequestTest extends \PHPUnit_Framework_TestCase {

    public function setUp() {
        new Request\TextRequest();
    }

    public function testTextRequest() {
        $textRequest = new Request\TextRequest();
        $textRequest->setText('请求的文字');
    }
    
    public function testImageRequest() {
        $imageRequest = new Request\ImageRequest();
        $imageRequest->setImage($binary);
        $imageRequest->setUrl($url);
    }

    public function testVoiceRequest() {
        $voiceRequest = new Request\VoiceRequest();
        $voiceRequest->setVoice($binary);
        $voiceRequest->setUrl($url);
        $voiceRequest->setText($text);
    }

    public function testVideoRequest() {
        $videoRequest->addImage($image);
        $videoRequest->setVoice($text);
    }

    

    public function testCardRequest() {
        
    }

    public function testEventRequest() {
        
    }

    public function testLocationRequest() {
        
    }

    public function testGoodsRequest() {
        
    }

}
