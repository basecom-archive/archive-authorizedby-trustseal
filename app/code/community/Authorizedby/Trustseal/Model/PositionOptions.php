<?php

class Authorizedby_Trustseal_Model_PositionOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'right-top', 'label' => $helper->__('Right Top')),
            array('value' => 'right-middle', 'label' => $helper->__('Right Middle')),
            array('value' => 'right-two-thirds', 'label' => $helper->__('Right Two Thirds')),
            array('value' => 'right-bottom', 'label' => $helper->__('Right Bottom')),
            array('value' => 'right-fixed', 'label' => $helper->__('Right Fixed'))
        );
    }
}