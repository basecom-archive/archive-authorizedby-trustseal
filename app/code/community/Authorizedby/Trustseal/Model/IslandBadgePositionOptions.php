<?php

class Authorizedby_Trustseal_Model_IslandBadgePositionOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'catalog_product_view', 'label' => $helper->__('Catalog Product View (Verified Original)')),
            array('value' => 'footer', 'label' => $helper->__('Footer (Authorized Partner)'))
        );
    }
}
