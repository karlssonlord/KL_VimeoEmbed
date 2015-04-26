<?php 

class KL_VimeoEmbed_Helper_Data extends Mage_Core_Model_Abstract
{
    public function embed($url, $width = null, $height = null)
    {
        $width = $width ? " width=\"{$width}\"" : '';
        $height = $height ? " height=\"{$height}\"" : '';
        $template = '<iframe src="https://player.vimeo.com/video/{{ id }}"{{ width }}{{ height }} frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

        return strtr($template, [
            '{{ id }}' => $this->parseId($url),
            '{{ width }}' => $width,
            '{{ height }}' => $height,
        ]);
    }

    private function parseId($url)
    {
        $path = parse_url($url, PHP_URL_PATH);
        return end(explode('/', $path));
    }
}