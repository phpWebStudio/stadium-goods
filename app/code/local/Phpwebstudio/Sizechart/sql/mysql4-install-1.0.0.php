<?php
/**
 * Created by   : Dmitry Shirokovskiy.
 * Email        : info@phpwebstudio.com
 * Date         : 14.07.19
 * Time         : 21:43
 * Description  :
 */

$installer = $this;
$installer->startSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$setup->addAttribute('catalog_product', 'gender', array(
    'type'              => 'varchar',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Gender',
    'group'             => 'General',
    'input'             => 'text',
    'class'             => '',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => false,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '',
    'searchable'        => true,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'used_in_product_listing' => true,
    'unique'            => false,
    'apply_to'          => array('simple', 'configurable'),
    'is_configurable'   => false,
    'is_used_for_promo_rules' => true
));

$setup->addAttribute('catalog_product', 'size_chart', array(
    'type'              => 'varchar',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Size Chart',
    'group'             => 'General',
    'input'             => 'text',
    'class'             => '',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => false,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '',
    'searchable'        => true,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'used_in_product_listing' => true,
    'unique'            => false,
    'apply_to'             => array('simple', 'configurable'),
    'is_configurable'   => false,
    'is_used_for_promo_rules' => true
));

$installer->endSetup();
