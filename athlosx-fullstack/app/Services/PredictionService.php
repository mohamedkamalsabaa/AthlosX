<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PredictionService
{
    protected $client;
    protected $apiUrl = 'http://127.0.0.1:8001/predict';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getPrediction($team, $opponent, $date)
    {
        try {
            $response = $this->client->get($this->apiUrl, [
                'query' => [
                    'team' => $team,
                    'opponent' => $opponent,
                    'date' => $date
                ]
            ]);

            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            return [
                'error' => true,
                'message' => $e->getMessage()
            ];
        }
    }
}