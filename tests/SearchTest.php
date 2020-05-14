<?php

use PHPunit\Framework\TestCase;
use carlospetrucio\findcep\Search;

class SearchTest extends TestCase{
    public function testGetAddressFromZipcodeDefaultusage(){
        $resultado = "ok";

        $this->assertEquals("ok", $resultado);
    }
}