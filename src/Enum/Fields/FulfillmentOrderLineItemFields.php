<?php

namespace Shopify\Enum\Fields;

class FulfillmentOrderLineItemFields extends AbstractObjectEnum
{
    public const ID = 'id';
    public const SHOP_ID = 'shop_id';
    public const FULFILLMENT_ORDER_ID = 'fulfillment_order_id';
    public const LINE_ITEM_ID = 'line_item_id';
    public const INVENTORY_ITEM_ID = 'inventory_item_id';
    public const QUANTITY = 'quantity';
    public const FULFILLABLE_QUANTITY = 'fulfillable_quantity';
    public const VARIANT_ID = 'variant_id';
    
    public function getFieldTypes()
    {
        return array(
            'id' => 'integer',
            'shop_id' => 'integer',
            'fulfillment_order_id' => 'integer',
            'line_item_id' => 'integer',
            'inventory_item_id' => 'integer',
            'quantity' => 'integer',
            'fulfillable_quantity' => 'integer',
            'variant_id' => 'integer',
        );
    }
}
