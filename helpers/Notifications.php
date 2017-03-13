<?php

namespace romulo1984\onesignal\helpers;


class Notifications extends Request
{
    public $id;
    public $methodName = 'notifications';
    public $endpoint = 'notifications';

    public function getAll($limit = null, $offset = null)
    {
        $response = $this->client->request(
            'GET', $this->endpoint,
            ['query' => [
                'app_id' => $this->appId,
                'limit' => $limit,
                'offset' => $offset
            ]]
        );

        return json_decode($response->getBody(), true);
    }

    public function getOne()
    {
        $response = $this->client->request(
            'GET', $this->endpoint . '/' . $this->id,
            ['query' => [
                'app_id' => $this->appId
            ]]
        );

        return json_decode($response->getBody(), true);
    }

}