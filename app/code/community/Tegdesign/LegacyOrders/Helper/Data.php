<?php
/**
 * Data.php
 * Helper functions
 *
 * @category    Tegdesign
 * @package     LegacyOrders
 * @author      Tegan Snyder <tsnyder@tegdesign.com>
 *
 */
class Tegdesign_LegacyOrders_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getModuleEnabled()
	{
		return Mage::getStoreConfigFlag('tegdesign_legacyorders/settings/legacyorders_enabled');
	}

	public function getOrderHistoryText()
	{
		return Mage::getStoreConfig('tegdesign_legacyorders/settings/order_history_text');
	}

	public function getLegacyOrderHistoryText()
	{
		return Mage::getStoreConfig('tegdesign_legacyorders/settings/legacy_order_history_text');
	}
}