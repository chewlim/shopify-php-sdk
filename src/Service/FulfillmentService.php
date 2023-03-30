<?php

namespace Shopify\Service;

use Shopify\Object\Fulfillment;

class FulfillmentService extends AbstractService
{
    public function all($orderId, array $params = [])
    {
        $endpoint = 'orders/' . $orderId . '/fulfillments.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createCollection(Fulfillment::class, $response['fulfillments']);
    }

    public function count($orderId, array $params = [])
    {
        $endpoint = 'orders/' . $orderId . '/fulfillments/count.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $response['count'];
    }

    public function get($orderId, $fulfillmentId, array $params = [])
    {
        $endpoint = 'orders/' . $orderId . '/fulfillments/' . $fulfillmentId . '.json';
        $response = $this->request($endpoint, 'GET', $params);
        return $this->createObject(Fulfillment::class, $response['fulfillments']);
    }

    public function getFulfilledOrder(Fulfillment &$fulfillment)
    {
        $endpoint = 'fulfillment_orders/' . $fulfillment->id . '/fulfillments.json';
        $response = $this->request($endpoint, 'GET');

        return $this->createObject(Fulfillment::class, $response['fulfillments']);
    }

    public function create(Fulfillment &$fulfillment)
    {
        $data = $fulfillment->exportData();
        $endpoint = 'fulfillments.json';
        $response = $this->request(
            $endpoint,
            'POST',
            [
                'fulfillment' => $data
            ]
        );
        $fulfillment->setData($response['fulfillment']);
    }

    public function updateTracking(Fulfillment &$fulfillment)
    {
        $data = $fulfillment->exportData();
        $endpoint = 'fulfillments/' . $fulfillment->id . '/update_tracking.json';
        $response = $this->request(
            $endpoint,
            'POST',
            [
                'fulfillment' => $data
            ]
        );
        $fulfillment->setData($response['fulfillment']);
    }

    public function cancel(Fulfillment &$fulfillment)
    {
        $endpoint = 'fulfillments/' . $fulfillment->id . '/cancel.json';
        $response = $this->request($endpoint, 'POST');
        $fulfillment->setData($response['fulfillment']);
    }
}
