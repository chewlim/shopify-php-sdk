<?php

namespace Shopify\Enum\Fields;

class LineItemByFulfillmentOrderFields extends AbstractObjectEnum
{
    const FULFILLMENT_ORDER_ID = 'fulfillment_order_id';

    public function getFieldTypes()
    {
        return array(
            'fulfillment_order_id' => 'integer',
        );
    }
}
