<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

abstract class MyWebService {
    protected $client;
    protected $baseUrl;
    protected $endpoint;
    protected $fullURL;
    protected $clientToken;
    protected $headers = [];

    /**
     * Constructor to initialize the endpoint
     *
     * @param string $endpoint
     */
    public function __construct($endpoint) {
        $this->client = new Client();
        $this->clientToken = config('app.my_config.client_token');
        $this->baseUrl = config('app.my_config.api_url');
        $this->endpoint = $endpoint;
        $this->fullURL = $this->baseUrl . '/' . $this->endpoint;
        $this->setHeaders();
    }

    /**
     * Set the default headers
     */
    public function setHeaders() {
        $this->headers = [
            'Accept' => 'application/json',
            'Client-Token' => $this->clientToken
        ];
    }

    public function getResponse($rawResponse) {
        $decodedResponse = json_decode($rawResponse->getBody()->getContents(), true);
        $response = [
            'message' => isset($decodedResponse['message']) ? $decodedResponse['message'] : null,
            'data' => isset($decodedResponse['data']) ? $decodedResponse['data'] : null
        ];

        if (($rawResponse->getStatusCode() == 200) || ($rawResponse->getStatusCode() == 201)) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'fail';
        }

        return response()->json($response, $rawResponse->getStatusCode());
    }

    /**
     * Get method to perform a GET request.
     *
     * @param string $urlParams
     * @return mixed
     */
    public function get($urlParams = '') {
        $fullURL = $this->fullURL . $urlParams;

        try {
            $response = $this->client->request('GET', $fullURL, [
                'headers' => $this->headers,
            ]);

            return $this->getResponse($response);
        } catch (RequestException $e) {
            return $this->getResponse($e->getResponse());
        }
    }
}
