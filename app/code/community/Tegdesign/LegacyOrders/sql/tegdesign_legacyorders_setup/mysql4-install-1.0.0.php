<?php
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer = $this;
$installer->startSetup();

/*

Example of pulling the data from another legacy Magento system. 
This query could be used as a staring point for an import:

SELECT
   increment_id as order_id,
   sfo.store_id,
   sfo.created_at,
   customer_email as email,
   subtotal,
   grand_total,
   GROUP_CONCAT(sfoi.sku) as skus_ordered,
   CONCAT(sfoas.firstname, ' ', sfoas.lastname) as shipping_name,
   sfoas.street as shipping_address,
   sfoas.city as shipping_city,
   sfoas.region as shipping_region,
   sfoas.postcode as shipping_postcode,
   sfoas.country_id as shipping_country,
   sfoab.street as shipping_address,
   sfoab.city as shipping_city,
   sfoab.region as shipping_region,
   sfoab.postcode as shipping_postcode,
   sfoab.country_id as shipping_country,
   status 
FROM
   sales_flat_order sfo  
INNER JOIN
   sales_flat_order_item sfoi 
      ON sfoi.order_id = sfo.entity_id  
LEFT JOIN
   sales_flat_order_address sfoas 
      ON sfoas.entity_id = sfo.shipping_address_id  
LEFT JOIN
   sales_flat_order_address sfoab 
      ON sfoab.entity_id = sfo.billing_address_id  
GROUP BY
   sfoi.order_id

*/

$table = $installer->getConnection()
->newTable($installer->getTable('tegdesign_legacyorders/orders'))
->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
	'auto_increment' => true,
    'identity'  => true,
    'unsigned'  => true,
    'nullable'  => false,
    'primary'   => true,
    ), 'id')
->addColumn('order_id', Varien_Db_Ddl_Table::TYPE_VARCHAR, '125', array(), 'order_id')
->addColumn('store_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array('nullable'  => true), 'store_id')
->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(), 'created_at')
->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, '155', array(), 'email')
->addColumn('subtotal', Varien_Db_Ddl_Table::TYPE_VARCHAR, '50', array(), 'subtotal')
->addColumn('grand_total', Varien_Db_Ddl_Table::TYPE_VARCHAR, '50', array(), 'grand_total')
->addColumn('skus_ordered', Varien_Db_Ddl_Table::TYPE_TEXT, '64k', array(), 'comma seperated list of skus')
->addColumn('shipping_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, '50', array(), 'shipping_name')
->addColumn('shipping_address', Varien_Db_Ddl_Table::TYPE_VARCHAR, '255', array(), 'shipping address')
->addColumn('shipping_city', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'shipping city')
->addColumn('shipping_region', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'shipping region')
->addColumn('shipping_postcode', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'shipping postcode')
->addColumn('shipping_country', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'shipping country')
->addColumn('billing_name', Varien_Db_Ddl_Table::TYPE_VARCHAR, '50', array(), 'billing name')
->addColumn('billing_address', Varien_Db_Ddl_Table::TYPE_VARCHAR, '255', array(), 'billing address')
->addColumn('billing_city', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'billing city')
->addColumn('billing_region', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'billing region')
->addColumn('billing_postcode', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'billing postcode')
->addColumn('billing_country', Varien_Db_Ddl_Table::TYPE_VARCHAR, '75', array(), 'billing country')
->addColumn('status', Varien_Db_Ddl_Table::TYPE_VARCHAR, '50', array(), 'order status');

$installer->getConnection()->createTable($table); 
$installer->endSetup();