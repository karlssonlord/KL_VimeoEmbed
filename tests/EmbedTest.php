<?php


class EmbedTest extends PHPUnit_Framework_TestCase 
{
    public function setUp()
    {
        \Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
    }
    
    /**
     * @test
     */
    public function it_write_the_correct_embed_code_without_width_or_height()
    {
        $template = '<iframe src="https://player.vimeo.com/video/61063778" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $embedCode = Mage::helper('vimeo')->embed('https://vimeo.com/61063778');
        $this->assertEquals($template, $embedCode);
    }

    /**
     * @test
     */
    public function it_write_the_correct_embed_code_with_width_and_height()
    {
        $template = '<iframe src="https://player.vimeo.com/video/61063778" width="500" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $embedCode = Mage::helper('vimeo')->embed('https://vimeo.com/61063778', 500, 450);
        $this->assertEquals($template, $embedCode);
    }
}
