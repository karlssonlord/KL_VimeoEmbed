# KL_VimeoEmbed

## Usage

    $embedCode = Mage::helper('vimeo')->embed('https://vimeo.com/61063778');

...and with additional optional arguments

    $embedCode = Mage::helper('vimeo')->embed('https://vimeo.com/61063778', $width = 500, $height = 450);

Note that when no dimensions are added. There won't be any defaults set. Is good for dealing with responsiveness yez?