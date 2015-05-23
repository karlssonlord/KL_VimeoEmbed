<?php

/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

/**
 * Update the attribute
 */
$installer->updateAttribute(
    Mage_Catalog_Model_Product::ENTITY,
    'vimeo_video_link',
    'source_model',
    null
);

$installer->endSetup();