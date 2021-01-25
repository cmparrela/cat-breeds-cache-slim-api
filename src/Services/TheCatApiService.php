<?php

namespace App\Services;

use GuzzleHttp\Client;

class TheCatApiService
{
    private $url;
    private $httpClient;

    public function __construct(Client $httpClient)
    {
        $this->url = $_ENV['URL_THE_CAT_API'];
        $this->httpClient = $httpClient;
    }

    public function searchBreedsByName($name)
    {
        $response = $this->httpClient->request('GET', "$this->url/breeds/search", [
            'query' => ['name' => $name]
        ]);

        return json_decode($response->getBody());
    }
}
