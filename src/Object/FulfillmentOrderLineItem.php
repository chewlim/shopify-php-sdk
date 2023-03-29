<?php

namespace Shopify\Object;

use Shopify\Enum\Fields\FulfillmentOrderLineItemFields;

class FulfillmentOrderLineItem extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return FulfillmentOrderLineItemFields::getInstance();
    }
}
