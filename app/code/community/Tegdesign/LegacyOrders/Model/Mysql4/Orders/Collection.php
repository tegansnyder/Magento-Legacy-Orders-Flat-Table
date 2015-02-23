<?php
/**
 * Collection.php
 *
 * @category    Tegdesign
 * @package     LegacyOrders
 * @author      Tegan Snyder <tsnyder@tegdesign.com>
 *
 */
class Tegdesign_LegacyOrders_Model_Mysql4_Orders_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct()
    {   
        $this->_init('tegdesign_legacyorders/orders');
    }   
}