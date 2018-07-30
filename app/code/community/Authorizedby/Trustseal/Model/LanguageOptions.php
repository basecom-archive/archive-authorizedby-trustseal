<?php

class Authorizedby_Trustseal_Model_LanguageOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        $helper = Mage::helper('trustseal');

        return array (
            array('value' => 'de', 'label' => $helper->__('German')),
            array('value' => 'en', 'label' => $helper->__('English'))
        );
    }
}
