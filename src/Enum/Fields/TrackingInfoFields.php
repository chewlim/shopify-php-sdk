<?php

namespace Shopify\Enum\Fields;

class TrackingInfoFields extends AbstractObjectEnum
{
    const COMPANY = 'company';
    const NUMBER = 'number';
    const URL = 'url';

    public function getFieldTypes()
    {
        return [
            'company' => 'string',
            'number' => 'string',
            'url' => 'string',
        ];
    }
}
