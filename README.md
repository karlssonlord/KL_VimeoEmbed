# KL_VimeoEmbed

[![Build Status](https://magnum.travis-ci.com/karlssonlord/KL_VimeoEmbed.svg?token=yHMF4HM72xKhkhRWAR3d)](https://magnum.travis-ci.com/karlssonlord/KL_VimeoEmbed)

## It does what

It installs a vimeo_video_link text attribute, and assigns this to the default attribute set.

## Usage

    $link = $product->getVimeoVideoLink();

    $embedCode = Mage::helper('vimeo')->embed($link);

...and with additional optional arguments

    $embedCode = Mage::helper('vimeo')->embed($link, $width = 500, $height = 450);

Note that when no dimensions are added. There won't be any defaults set. Is good for dealing with responsiveness yez?