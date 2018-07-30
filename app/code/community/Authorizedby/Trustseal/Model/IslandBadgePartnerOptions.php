<?php

class Authorizedby_Trustseal_Model_IslandBadgePartnerOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'embedded-partner', 'label' => $helper->__('small')),
            array('value' => 'embedded-partner:large', 'label' => $helper->__('large'))
        );
    }
}
