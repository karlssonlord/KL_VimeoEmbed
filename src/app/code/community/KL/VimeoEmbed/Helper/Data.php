<?php

/**
 * @package KL_VimeoEmbed
 */
class KL_VimeoEmbed_Helper_Data extends Mage_Core_Model_Abstract
{
    /**
     * @param      $url
     * @param null $width
     * @param null $height
     * @return string
     */
    public function embed($url, $width = null, $height = null)
    {
        $width = $width ? " width=\"{$width}\"" : '';
        $height = $height ? " height=\"{$height}\"" : '';
        $template = '<iframe class="vimeo" src="https://player.vimeo.com/video/{{ id }}?api=1&title=0&byline=0&portrait=0&badge=0"{{ width }}{{ height }} frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

        return strtr($template, [
            '{{ id }}' => $this->parseId($url),
            '{{ width }}' => $width,
            '{{ height }}' => $height,
        ]);
    }

    /**
     * @param $url
     * @return string
     */
    private function parseId($url)
    {
        $path = parse_url($url, PHP_URL_PATH);
        return basename($path);
    }

}