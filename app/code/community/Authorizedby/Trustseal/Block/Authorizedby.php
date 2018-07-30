<?php

class Authorizedby_Trustseal_Block_Authorizedby extends Mage_Core_Block_Template
{
    public function isEnabled() {
        return Mage::getStoreConfigFlag('trustseal/config/activate');
    }

    public function isMobileEnabled() {
        return Mage::getStoreConfigFlag('trustseal/config/mobile');
    }

    public function isStandardBadgeEnabled() {
        return Mage::getStoreConfigFlag('trustseal/config/standard_badge');
    }

    public function getBadgePosition() {
        return Mage::getStoreConfig('trustseal/config/position');
    }

    public function getBadgePositionAlignment() {
        return Mage::getStoreConfig('trustseal/config/position_alignment');
    }

    public function getBadgePositionUnit() {
        return Mage::getStoreConfig('trustseal/config/position_unit');
    }

    public function getBadgePositionMargin() {
        return Mage::getStoreConfig('trustseal/config/position_margin');
    }

    public function getProductVerificationAttribute() {
        return Mage::getStoreConfig('trustseal/config/product_verifictation_attribute');
    }

    public function getLanguage() {
        return Mage::getStoreConfig('trustseal/config/language');
    }

    public function isIslandEnabled() {
        return Mage::getStoreConfig('trustseal/config/island');
    }

    public function getIslandPosition() {
        return explode(',', Mage::getStoreConfig('trustseal/config/island_position'));
    }

    public function getIslandProductType() {
        return Mage::getStoreConfig('trustseal/config/island_product_type');
    }

    public function getIslandFooterType() {
        return Mage::getStoreConfig('trustseal/config/island_footer_type');
    }

    public function getZIndex() {
        return Mage::getStoreConfig('trustseal/config/z_index');
    }
}
