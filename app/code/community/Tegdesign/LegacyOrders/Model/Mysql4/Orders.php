<?php
/**
 * Orders.php
 *
 * @category    Tegdesign
 * @package     LegacyOrders
 * @author      Tegan Snyder <tsnyder@tegdesign.com>
 *
 */
class Tegdesign_LegacyOrders_Model_Mysql4_Orders extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {   
        $this->_init('tegdesign_legacyorders/orders', 'id');
    }   
}