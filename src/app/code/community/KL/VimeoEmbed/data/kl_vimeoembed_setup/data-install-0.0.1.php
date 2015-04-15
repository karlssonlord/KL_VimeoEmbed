<?php



/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
/**
 * Create vimeo video link attribute
 */
$installer->addAttribute(
    Mage_Catalog_Model_Product::ENTITY,
    'vimeo_video_link',
    array(
        'label'                      => Mage::helper('core')->__('Vimeo Video Link'),
        'group'                      => 'General',
        'type'                       => 'text',
        'input'                      => 'text',
        'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'user_defined'               => true,
        'required'                   => false,
        'visible'                    => true,
        'source'                     => 'eav/entity_attribute_source_table',
        'backend'                    => null,
        'searchable'                 => false,
        'visible_in_advanced_search' => false,
        'visible_on_front'           => false,
        'is_configurable'            => false,
        'is_html_allowed_on_front'   => false,
        'sort_order'                 => '50',
    )
);

function addAttributeToAttributeSet($attributeId, $attributeSetId, $attributeGroupName = 'General')
{
    $model = Mage::getModel('eav/entity_setup','core_setup');
    $attributeGroupId = $model->getAttributeGroup('catalog_product', $attributeSetId, $attributeGroupName);
    $model->addAttributeToSet('catalog_product', $attributeSetId, $attributeGroupId, $attributeId);
}

$attributeModel = Mage::getModel('eav/entity_attribute')->loadByCode(Mage_Catalog_Model_Product::ENTITY, 'vimeo_video_link');
addAttributeToAttributeSet($attributeModel->getId(), 4);

$installer->endSetup();