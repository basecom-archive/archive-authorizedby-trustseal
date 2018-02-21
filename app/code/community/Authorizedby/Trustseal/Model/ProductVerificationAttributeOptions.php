<?php

class Authorizedby_Trustseal_Model_ProductVerificationAttributeOptions
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $attributes = $this->getAttributes();

        $options = array(
            array(
                'value' => '',
                'label' => '',
            )
        );

        foreach ($attributes as $attribute) {
            $options[] = array(
                'value' => $attribute->getAttributeCode(),
                'label' => $attribute->getAttributeCode()
            );
        }

        return $options;
    }

    /**
     * Retrieve attributes
     *
     * @return Mage_Eav_Model_Resource_Attribute_Collection
     */
    public function getAttributes()
    {
        return Mage::getResourceModel('eav/entity_attribute_collection')
            ->setEntityTypeFilter(4);
    }
}