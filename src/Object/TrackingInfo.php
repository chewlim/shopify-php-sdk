<?php

namespace Shopify\Object;


use Shopify\Enum\Fields\TrackingInfoFields;

class TrackingInfo extends AbstractObject
{
    public static function getFieldsEnum()
    {
        return TrackingInfoFields::getInstance();
    }
}
