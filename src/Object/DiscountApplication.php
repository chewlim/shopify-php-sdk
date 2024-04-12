<?php

namespace Shopify\Object;

use Shopify\Enum\Fields\DiscountApplicationFields;

class DiscountApplication extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return DiscountApplicationFields::getInstance();
    }
}