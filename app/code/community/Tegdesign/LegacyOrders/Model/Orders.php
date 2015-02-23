<?php
/**
 * Orders.php
 *
 * @category    Tegdesign
 * @package     LegacyOrders
 * @author      Tegan Snyder <tsnyder@tegdesign.com>
 *
 */
class Tegdesign_LegacyOrders_Model_Orders extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {   
        $this->_init('tegdesign_legacyorders/orders');
    }

    public function retrieveOrders() {

    	$store_id = Mage::app()->getStore()->getStoreId();

		$customer = Mage::getSingleton('customer/session')->getCustomer();
		$orders = Mage::getModel('tegdesign_legacyorders/orders')
			->getCollection()
            ->addFieldToFilter('email', $customer->getEmail())
            ->setOrder('created_at', 'desc');

    	return $orders;
    }
 
}