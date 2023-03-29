<?php

namespace Shopify\Enum\Fields;

class FulfillmentOrderFields extends AbstractObjectEnum
{
    public const ID = 'id';
    public const ORDER_ID = 'order_id';
    public const SHOP_ID = 'shop_id';
    public const ASSIGNED_LOCATION_ID = 'assigned_location_id';
    public const STATUS = 'status';
    public const SUPPORTED_ACTIONS = 'supported_actions';
    public const DESTINATION = 'destination';
    public const LINE_ITEMS = 'line_items';
    public const FULFILLMENT_SERVICE_BUNDLE = 'fulfillment_service_handle';
    public const ASSIGNED_LOCATION = 'assigned_location';
    public const MERCHANT_REQUESTS = 'merchant_requests';

    public function getFieldTypes()
    {
        return array(
            'id' => 'integer',
            'order_id' => 'integer',
            'shop_id' => 'integer',
            'assigned_location_id' => 'integer',
            'status' => 'string',
            "supported_actions" => 'array',
            "destination" => 'DestinationLocation', // Probably need new fields
            'line_items' => 'FulfillmentOrderLineItem[]',
            'fulfillment_service_handle' => 'string',
            "assigned_location" => 'AssignedLocation', // Probably need new fields
            "merchant_requests" => 'array', // Probably need new fields
        );
    }
}
