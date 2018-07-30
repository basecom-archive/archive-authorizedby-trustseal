<?php

class Authorizedby_Trustseal_Model_IslandBadgeOriginalOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'embedded-original', 'label' => $helper->__('small')),
            array('value' => 'embedded-original-oval', 'label' => $helper->__('oval (with brand logo)'))
        );
    }
}
