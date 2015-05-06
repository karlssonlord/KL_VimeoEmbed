<?php


class EmbedTest extends PHPUnit_Framework_TestCase 
{
    public function setUp()
    {
        Mage::init();
    }
    
    /**
     * @test
     */
    public function it_write_the_correct_embed_code_without_width_or_height()
    {
        $template = '<iframe src="https://player.vimeo.com/video/61063778?api=1&title=0&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $embedCode = Mage::helper('vimeo')->embed('https://vimeo.com/61063778');
        $this->assertEquals($template, $embedCode);
    }

    /**
     * @test
     */
    public function it_can_write_the_correct_embed_code_with_width_and_height()
    {
        $template = '<iframe src="https://player.vimeo.com/video/61063778?api=1&title=0&byline=0&portrait=0&badge=0" width="500" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $embedCode = Mage::helper('vimeo')->embed('https://vimeo.com/61063778', 500, 450);
        $this->assertEquals($template, $embedCode);
    }

    /**
     * @test
     */
    public function it_can_also_deal_with_vimeo_channels_type_urls()
    {
        $template = '<iframe src="https://player.vimeo.com/video/120479695?api=1&title=0&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
        $embedCode = Mage::helper('vimeo')->embed('https://vimeo.com/channels/staffpicks/120479695');
        $this->assertEquals($template, $embedCode);
    }
}
