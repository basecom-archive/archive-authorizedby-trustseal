<?php

class Authorizedby_Trustseal_Model_IslandBadgeTypeOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'embedded-partner', 'label' => $helper->__('Partner')),
            array('value' => 'embedded-partner:large', 'label' => $helper->__('Partner Large')),
            array('value' => 'embedded-original', 'label' => $helper->__('Original')),
            array('value' => 'embedded-original-oval', 'label' => $helper->__('Original Oval'))
        );
    }
}
