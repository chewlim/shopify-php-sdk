<?php

namespace Shopify\Object;


use Shopify\Enum\Fields\LineItemByFulfillmentOrderFields;

class LineItemByFulfillmentOrder extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return LineItemByFulfillmentOrderFields::getInstance();
    }
}
