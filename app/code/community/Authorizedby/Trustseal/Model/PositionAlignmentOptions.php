<?php

class Authorizedby_Trustseal_Model_PositionAlignmentOptions
{
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'positionTop', 'label' => $helper->__('Top')),
            array('value' => 'positionBottom', 'label' => $helper->__('Bottom'))
        );
    }
}