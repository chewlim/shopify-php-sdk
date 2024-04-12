<?php

namespace Shopify\Enum\Fields;

class DiscountApplicationFields extends AbstractObjectEnum
{
    const TYPE = 'type';
    const CODE = 'code';
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const VALUE = 'value';
    const VALUE_TYPE = 'value_type';
    const ALLOCATION_METHOD = 'allocation_method';
    const TARGET_SELECTION = 'target_selection';
    const TARGET_TYPE = 'target_type';

    public function getFieldTypes()
    {
        return array(
            'type' => 'string',
            'code' => 'string',
            'title' => 'string',
            'description' => 'string',
            'value' => 'string',
            'value_type' => 'string',
            'allocation_method' => 'string',
            'target_selection' => 'string',
            'target_type' => 'string',
        );
    }
}