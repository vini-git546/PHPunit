<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';
 
class WebTest extends PHPUnit_Extensions_SeleniumTestCase
{
    protected function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://www.google.com/');
    }
 
    public function test()
    {
        $this->open('http://www.google.com/');
        $this->windowMaximize;
    }
}
?>