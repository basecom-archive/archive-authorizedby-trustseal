<?php

class Authorizedby_Trustseal_Model_PositionAlignmentUnitOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'px', 'label' => $helper->__('Pixel')),
            array('value' => '%', 'label' => $helper->__('Percent'))
        );
    }
}